/*=========================================================================================
  File Name: blog-edit.js
  Description: Blog edit field select2 and quill editor JS
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function (window, document, $) {
  'use strict';

  var select = $('.select2');
  var editor = document.querySelector("#editor");
  var cover_1_feature = $('#cover_1_feature');
  var cover_2_feature = $('#cover_2_feature');
  var cover_3_feature = $('#cover_3_feature');
  var imageText_1 = document.getElementById('image-text_1');
  var imageText_2 = document.getElementById('image-text_2');
  var imageText_3 = document.getElementById('image-text_3');
  var cover_1 = $('#cover_1');
  var cover_2 = $('#cover_2');
  var cover_3 = $('#cover_3');

  // Basic Select2 select
  select.each(function () {
    var $this = $(this);
    $this.wrap('<div class="position-relative"></div>');
    $this.select2({
      // the following code is used to disable x-scrollbar when click in select input and
      // take 100% width in responsive also
      dropdownAutoWidth: true,
      width: '100%',
      dropdownParent: $this.parent()
    });
  });

  // Snow Editor
  var Font = Quill.import('formats/font');
  Font.whitelist = ['sofia', 'slabo', 'roboto', 'inconsolata', 'ubuntu'];
  Quill.register(Font, true);

  var blogEditor = new Quill(editor, {
    bounds: editor,
    modules: {
      formula: true,
      syntax: true,
      toolbar: [
        [
          {
            font: []
          },
          {
            size: []
          }
        ],
        ['bold', 'italic', 'underline', 'strike'],
        [
          {
            color: []
          },
          {
            background: []
          }
        ],
        [
          {
            script: 'super'
          },
          {
            script: 'sub'
          }
        ],
        [
          {
            header: '1'
          },
          {
            header: '2'
          },
          'blockquote',
          'code-block'
        ],
        [
          {
            list: 'ordered'
          },
          {
            list: 'bullet'
          },
          {
            indent: '-1'
          },
          {
            indent: '+1'
          }
        ],
        [
          'direction',
          {
            align: []
          }
        ],
        ['link', 'image', 'video', 'formula'],
        ['clean']
      ]
    },
    theme: 'snow'
  });
  // Change featured image
  readCover(cover_1, cover_1_feature, imageText_1);
  readCover(cover_2, cover_2_feature, imageText_2);
  readCover(cover_3, cover_3_feature, imageText_3);
})(window, document, jQuery);

function readCover(cover, cover_feature, imageText) {
  if (cover.length) {
    $(cover).on('change', function (e) {
      var reader = new FileReader(),
        files = e.target.files;
      reader.onload = function () {
        if (cover_feature.length) {
          cover_feature.attr('src', reader.result);
        }
      };
      reader.readAsDataURL(files[0]);
      imageText.innerHTML = cover.val();
    });
  }
}