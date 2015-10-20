
(function($) {
    
    $(document).ready(function () {
        
        $('#provider-data a').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
        
        _checkQueryString();
        
        $('#provider-packages .btn-more-info').on('click', function () {
            var $this = $(this);
            var $data = $('#'+$this.data('target'));
            
            if ($data.is(':visible')) {
                $data.hide();
                $this.text($this.data('title-original'));
            } else {
                $data.show();
                $this.text($this.data('title-alt'));
            }
        });
        
        $('#provider-pictures a.thumb-gallery').touchGallery();
        
        $('#provider-packages div.package-more-views').each(function () {
            $(this).find('a.thumb-gallery').touchGallery();
        });
       
    });

    // Check bootstrap tabs by querystring
    var _checkQueryString = function () {
        var querystring = window.location.href;
        if (querystring.indexOf("#") !== -1) {
            querystring = querystring.split("#")[1];
            $content = $('#'+querystring);
            if ($content.length > 0) {
                $content.siblings().removeClass('active');
                $content.addClass('active');
                $content.parent().prev().find('a[href=#'+querystring+']').parent().addClass('active').siblings().removeClass('active');
            }
            $content = null;
        }
    };

}(jQuery));