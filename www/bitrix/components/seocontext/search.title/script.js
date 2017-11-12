function JCTitleSearch(arParams) {
    var _this = this;
    this.arParams = {
        'AJAX_PAGE': arParams.AJAX_PAGE,
        'CONTAINER_ID': arParams.CONTAINER_ID,
        'ITEMS_RESULT_CONTAINER_ID': arParams.ITEMS_RESULT_CONTAINER_ID,
        'CATEGORY_RESULT_CONTAINER_ID': arParams.CATEGORY_RESULT_CONTAINER_ID,
        "TABS_HEAD_ID": arParams.TABS_HEAD_ID,
        'TABS_BODY_ID': arParams.TABS_BODY_ID,
        'INPUT_ID': arParams.INPUT_ID,
        'MIN_QUERY_LEN': parseInt(arParams.MIN_QUERY_LEN),
        'SEARCH_TYPE': arParams.SEARCH_TYPE
    };
    if (arParams.WAIT_IMAGE)
        this.arParams.WAIT_IMAGE = arParams.WAIT_IMAGE;
    if (arParams.MIN_QUERY_LEN <= 0)
        arParams.MIN_QUERY_LEN = 1;

    this.cache = [];
    this.cache_key = null;

    this.startText = '';
    this.running = false;
    this.currentRow = -1;
    this.RESULT = null;
    this.CONTAINER = null;
    this.INPUT = null;
    this.WAIT = null;


    this.ShowTabs = function () {
        BX.addClass(BX(_this.arParams.TABS_HEAD_ID), 'header-search__tabs-head');
        BX.removeClass(BX(_this.arParams.TABS_HEAD_ID), 'header-search__tabs-head_n');
        BX(_this.arParams.TABS_BODY_ID).style.display = 'block';

    }
    this.HideTabs = function () {
        BX.removeClass(BX(_this.arParams.TABS_HEAD_ID), 'header-search__tabs-head');
        BX.addClass(BX(_this.arParams.TABS_HEAD_ID), 'header-search__tabs-head_n');
        BX(_this.arParams.TABS_BODY_ID).style.display = 'none';

    }

    this.selectSearchType = function (searchType) {
        _this.arParams.SEARCH_TYPE = searchType;
        switch (searchType) {
            case 'items':
                if(!!_this.RESULT)_this.RESULT.style.display='none';
                _this.RESULT = BX(this.arParams.ITEMS_RESULT_CONTAINER_ID);
                _this.RESULT.style.display='block';

                BX.removeClass(BX('search-categories'), 'active');
                BX.addClass(BX('search-items'), 'active');

                break;
            case 'categories':
                if(!!_this.RESULT)_this.RESULT.style.display='none';
                _this.RESULT = BX(this.arParams.CATEGORY_RESULT_CONTAINER_ID);
                _this.RESULT.style.display='block';
                BX.addClass(BX('search-categories'), 'active');
                BX.removeClass(BX('search-items'), 'active');
                break;

        }
        _this.ShowResult();

    }

    this.ShowResult = function (result) {
        if (BX.type.isString(result)) {
            _this.RESULT.innerHTML = result;
        }
        if(_this.RESULT.innerHTML.trim().length)
            _this.ShowTabs();
        _this.RESULT.style.display = _this.RESULT.innerHTML !== '' ? 'block' : 'none';
    };

    this.HideResult = function (result) {

        _this.RESULT.style.display = 'none';
        BX.removeClass(BX(_this.arParams.CONTAINER_ID), 'opened');

        _this.currentRow = -1;
        _this.UnSelectAll();
        _this.HideTabs();
    };

    this.onKeyPress = function (keyCode) {

        var children = BX.findChildren(_this.RESULT, {'tag': 'div', 'class': 'header-search__product'});
        if (!children)
            return false;

        var i;
        var cnt = children.length;

        switch (keyCode) {
            case 27: // escape key - close search div
                _this.HideResult();
                return true;

            case 40: // down key - navigate down on search results
                if (_this.RESULT.style.display == 'none')
                    _this.ShowResult();

                var first = -1;
                for (i = 0; i < cnt; i++) {

                    if (first == -1)
                        first = i;

                    if (_this.currentRow < i) {
                        _this.currentRow = i;
                        break;
                    }
                    else if (BX.hasClass(children[i], 'title-search-selected')) {
                        BX.removeClass(children[i], 'title-search-selected');
                    }
                }

                if (i == cnt && _this.currentRow != i)
                    _this.currentRow = first;

                BX.addClass(children[_this.currentRow], 'title-search-selected');
                var focus_target = BX.findChildren(children[_this.currentRow], {'tag': 'a'}, true);
                BX.focus(focus_target[0]);
                BX.focus(_this.INPUT);

                return true;

            case 38: // up key - navigate up on search results
                if (_this.RESULT.style.display == 'none')
                    _this.ShowResult();

                var last = -1;
                for (i = cnt - 1; i >= 0; i--) {
                    if (last == -1)
                        last = i;

                    if (_this.currentRow > i) {
                        _this.currentRow = i;
                        break;
                    }
                    else if (BX.hasClass(children[i], 'title-search-selected')) {
                        BX.removeClass(children[i], 'title-search-selected');
                    }
                }

                if (i < 0 && _this.currentRow != i)
                    _this.currentRow = last;

                BX.addClass(children[_this.currentRow], 'title-search-selected');
                var focus_target = BX.findChildren(children[_this.currentRow], {'tag': 'a'}, true);
                BX.focus(focus_target[0]);
                BX.focus(_this.INPUT);

                return true;

            case 13: // enter key - choose current search result
                if (_this.RESULT.style.display == 'block') {
                    for (i = 0; i < cnt; i++) {
                        if (_this.currentRow == i) {
                            var a = BX.findChild(children[i], {'tag': 'a'}, true);
                            if (a) {
                                window.location = a.href;
                                return true;
                            }
                        }
                    }
                }
                return false;
        }

        return false;
    };

    this.onTimeout = function () {
        _this.onChange(function () {
            setTimeout(_this.onTimeout, 500);
        });
    };

    this.onChange = function (callback) {
        if (_this.running)
            return;
        _this.running = true;

        if (_this.INPUT.value != _this.oldValue && _this.INPUT.value != _this.startText) {
            _this.oldValue = _this.INPUT.value;
            if (_this.INPUT.value.length >= _this.arParams.MIN_QUERY_LEN) {
                _this.ShowResult();
                _this.cache_key = _this.arParams.INPUT_ID + '|' + _this.INPUT.value;
                if (_this.cache[_this.cache_key] == null) {
                    if (_this.WAIT) {
                        var pos = BX.pos(_this.INPUT);
                        var height = (pos.bottom - pos.top) - 2;
                        _this.WAIT.style.top = (pos.top + 1) + 'px';
                        _this.WAIT.style.height = height + 'px';
                        _this.WAIT.style.width = height + 'px';
                        _this.WAIT.style.left = (pos.right - height + 2) + 'px';
                        _this.WAIT.style.display = 'block';
                    }
                    BX.ajax.post(
                        _this.arParams.AJAX_PAGE,
                        {
                            'ajax_call': 'y',
                            'INPUT_ID': _this.arParams.INPUT_ID,
                            'q': _this.INPUT.value,
                            'l': _this.arParams.MIN_QUERY_LEN,
                            't': _this.arParams.SEARCH_TYPE
                        },
                        function (result) {
                            _this.cache[_this.cache_key] = result;
                            _this.ShowResult(result);
                            _this.currentRow = -1;
                            _this.EnableMouseEvents();
                            if (_this.WAIT)
                                _this.WAIT.style.display = 'none';
                            if (!!callback)
                                callback();
                            _this.running = false;
                        }
                    );
                    return;
                }
                else {
                    _this.ShowResult(_this.cache[_this.cache_key]);
                    _this.currentRow = -1;
                    _this.EnableMouseEvents();
                }
            }
            else {
                _this.RESULT.style.display = 'none';
                _this.currentRow = -1;
                _this.UnSelectAll();
                _this.HideTabs();
            }
        }
        if (!!callback)
            callback();
        _this.running = false;
    };

    this.UnSelectAll = function () {
        var children = BX.findChildren(_this.RESULT, {'tag': 'div', 'class': 'header-search__product'});
        var cnt = children.length;
        for (var i = 0; i < cnt; i++)
            BX.removeClass(children[i], 'title-search-selected');
    };

    this.EnableMouseEvents = function () {
        var children = BX.findChildren(_this.RESULT, {'tag': 'div', 'class': 'header-search__product'})
        var cnt = children.length;
        for (var i = 0; i < cnt; i++) {
            children[i].id = 'row_' + i;
            children[i].onmouseover = function (e) {
                if (_this.currentRow != this.id.substr(4)) {
                    _this.UnSelectAll();
                    BX.addClass(this, 'title-search-selected');
                    _this.currentRow = this.id.substr(4);
                }
            };
            children[i].onmouseout = function (e) {
                BX.removeClass(_this, 'title-search-selected');
                _this.currentRow = -1;
            };
        }

    };

    this.onFocusLost = function (hide) {
        /* setTimeout(function () {
         _this.RESULT.style.display = 'none';
         }, 250);

         _this.HideTabs();*/

    };

    this.onFocusGain = function () {
        if (_this.RESULT.innerHTML.length){
            this.ShowResult();
        }

        BX.addClass(BX(_this.arParams.CONTAINER_ID), 'opened');
    };

    this.onKeyDown = function (e) {
        if (!e)
            e = window.event;

        if (_this.onKeyPress(e.keyCode))
            return BX.PreventDefault(e);

    };

    this.adjustResultNode = function () {
        var pos;
        var fixedParent = BX.findParent(_this.RESULT, BX.is_fixed);
        if (!!fixedParent) {
            _this.RESULT.style.position = 'fixed';
            _this.RESULT.style.zIndex = BX.style(fixedParent, 'z-index') + 2;
            pos = BX.pos(_this.RESULT, true);
        }
        else {
            _this.RESULT.style.position = 'absolute';
            pos = BX.pos(_this.RESULT);
        }
        pos.width = pos.right - pos.left;
        _this.RESULT.style.top = (pos.bottom + 2) + 'px';
        _this.RESULT.style.left = pos.left + 'px';
        _this.RESULT.style.width = pos.width + 'px';
        return pos;
    };

    this._onContainerLayoutChange = function () {
        if (_this.RESULT.style.display !== "none" && _this.RESULT.innerHTML !== '') {
            _this.adjustResultNode();
        }
    };
    this.Init = function () {
        _this.CONTAINER = document.getElementById(this.arParams.CONTAINER_ID);
        _this.selectSearchType(_this.arParams.SEARCH_TYPE);
        BX.addCustomEvent(this.CONTAINER, "OnNodeLayoutChange", this._onContainerLayoutChange);

        _this.INPUT = document.getElementById(this.arParams.INPUT_ID);
        _this.startText = this.oldValue = this.INPUT.value;
        BX.bind(this.INPUT, 'focus', function () {
            _this.onFocusGain()
        });
        BX.bind(this.INPUT, 'blur', function () {
            _this.onFocusLost()
        });
        BX.bind(BX('search-items'), 'click', function () {
            _this.selectSearchType('items')
        });
        BX.bind(BX('search-categories'), 'click', function () {
            _this.selectSearchType('categories')
        });
        BX.bind(document.body, 'click', function (e) {
            if ($(_this.CONTAINER).has(e.target).length === 0) {
                _this.HideResult();
            }
        })
        _this.INPUT.onkeydown = this.onKeyDown;

        if (this.arParams.WAIT_IMAGE) {
            _this.WAIT = document.body.appendChild(document.createElement("DIV"));
            _this.WAIT.style.backgroundImage = "url('" + this.arParams.WAIT_IMAGE + "')";
            if (!BX.browser.IsIE())
                this.WAIT.style.backgroundRepeat = 'none';
            _this.WAIT.style.display = 'none';
            _this.WAIT.style.position = 'absolute';
            _this.WAIT.style.zIndex = '1100';
        }

        BX.bind(this.INPUT, 'bxchange', function () {
            _this.onChange()
        });
    };
    BX.ready(function () {
        _this.Init(arParams)
    });
}
