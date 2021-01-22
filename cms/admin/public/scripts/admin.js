$(function () {

    tinymce.init({
      selector: 'textarea.editor',
      height: 300,
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      external_filemanager_path: app_url + "/3rd-party-apps/filemanager/",
      filemanager_title: "Dosya Yöneticisi",
      external_plugins: {"filemanager": app_url + "/3rd-party-apps/filemanager/plugin.min.js"},
      filemanager_access_key: "erdem123"
   });

    $('.box >h3').append('<button type="button" class="toggle"><span class="fa fa-caret-up"></span></button>');

    $(document).on('click', 'button.toggle', function (e) {
        var id = $(this).closest('.box').attr('id');
        $(this).parent().next().toggle();
        if ($('.fa', this).hasClass('fa-caret-up')) {
            $('.fa', this).removeClass('fa-caret-up').addClass('fa-caret-down');
            if (id != 'undefined') {
                localStorage.setItem('box_' + id, true);
            }
        } else {
            $('.fa', this).removeClass('fa-caret-down').addClass('fa-caret-up');
            if (id != 'undefined') {
                delete localStorage['box_' + id];
            }
        }
        e.preventDefault();
    });
    function checkToggle() {
        $.each(localStorage, function (key, val) {
            if (!key.indexOf('box_')) {
                $('#' + (key.replace('box_', '')) + ' .toggle').trigger('click');
            }
        });
    }

    checkToggle();

    $('.sidebar >ul >li:not(.line)').hover(function () {
        if (!$('.sub-menu:visible', this).length) {
            $('.dropdown-menu', this).show();
            $(this).addClass('hover');
        }
    }, function () {
        $('.dropdown-menu', this).hide();
        $(this).removeClass('hover');
    });

    $('[dropdown] >li').hover(function () {
        $('ul', this).show();
        $(this).addClass('active');
    }, function () {
        $('ul', this).hide();
        $(this).removeClass('active');
    });

    $('.sidebar >ul >li').each(function () {
        if ($('.sub-menu', this).length) {
            var html = $('.sub-menu', this).html();
            $(this).append('<ul dropdown class="dropdown-menu">' + html + '</ul>');
        }
    });

    $('.collapse-menu').on('click', function (e) {
        $('.sidebar').toggleClass('fix');
        if ($('.fa', this).hasClass('fa-arrow-circle-left')) {
            $('.sidebar >ul >li.active .sub-menu').hide();
            $('.fa', this).removeClass('fa-arrow-circle-left').addClass('fa-arrow-circle-right');
            localStorage.setItem('sidebar', true);
        } else {
            $('.fa', this).removeClass('fa-arrow-circle-right').addClass('fa-arrow-circle-left');
            $('.sidebar >ul >li.active .sub-menu').show();
            delete localStorage['sidebar'];
        }
        e.preventDefault();
    });
    function sidebarCheck() {
        if (localStorage.getItem('sidebar')) {
            $('.sidebar .collapse-menu').trigger('click');
        }
    }

    sidebarCheck();

    if ($('#editor').length) {
        CKEDITOR.replace('editor');
    }

    $('.menu').sortable({
        handle: '.handle',
        update: function (event, ui) {
            $('#menu >li').each(function () {
                var subMenu = $('li', this);
                if (subMenu.length){
                    var index = $(this).index();
                    subMenu.each(function(){
                        $('input:eq(0)', this).attr('name', 'sub_title_' + index + '[]');
                        $('input:eq(1)', this).attr('name', 'sub_url_' + index + '[]');
                    });
                }
            });
        }
    });

    $('[tab]').each(function(){
        var tabList = $('[tab-list] li', this),
            tabContent = $('[tab-content]', this);
        tabList.filter(':first').addClass('active');
        tabContent.filter(':not(:first)').hide();
        tabList.on('click', function (e) {
            var index = $(this).index();
            tabList.removeClass('active').filter(this).addClass('active');
            tabContent.hide().filter(':eq(' + index + ')').fadeIn(300);
            e.preventDefault();
        });
    });


    $('.table-sortable').sortable({
        update: function (event, ui) {
            var postData = $(this).sortable('serialize');
            postData += '&table=' + $(this).data('table');
            postData += '&where=' + $(this).data('where');
            postData += '&column=' + $(this).data('column');
            $.post(api_url + '/table-sort', postData, function(response){
                if (response.success){
                    $('.success-msg').show().find('>div').html(response.success);
                }
            }, 'json');
        }
    });

    $('.success-close-btn').on('click', function (e) {
        $(this).parent().hide();
        e.preventDefault();
    });

});