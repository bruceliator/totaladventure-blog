
(function($) {

    $(document).ready(function () {
        
        ProviderList.init();
        ThumbGallery();
        
    });
    
    var ThumbGallery = function () {
        var $thumbGallery = $('#thumb-gallery');
        if ($thumbGallery.length > 0) {
            $thumbGallery.find('a.thumb-gallery').touchGallery();
        }  
    };
    
    var ProviderList = {
        
        _conf: {
            ajaxUrl: 'include/block/provider-list-ajax.php',
            appendNode: '#provider-list ul',
            triggerNode: '#get-more-items'
        },
        
        _trigger$: null,
        _append$: null,
        
        _ajax: 0,
        
        getCollection: function () {
            var _this = this;
            this._ajax = $.ajax({
                url: _this._conf.ajaxUrl,
                success: function (data) {
                    _this._append$.append(data);
                    _this.initGallery();
                    _this._ajax = 0;
                },
                error: function () {
                    // handle the error =)
                    _this._ajax = 0;
                }
            });
        },
        
        init: function () {
            var _this = this;
            
            _this._trigger$ = $(_this._conf.triggerNode);
            _this._append$ = $(_this._conf.appendNode);
            
            _this._trigger$.on('click', function (e) {
                e.preventDefault();
                if (_this._ajax === 0) {
                    _this.getCollection();
                }
            });
            
            _this.initGallery();
        },
        
        initGallery: function () {
            this._append$.find('a.provider-gallery').touchGallery();
        }  
    };

}(jQuery));