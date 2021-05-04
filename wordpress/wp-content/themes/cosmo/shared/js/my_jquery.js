(function($) {
  $(document).ready(function(){
    //Write jQuery script here
    // var name = $('.smart-cf-field-type-select select').attr('name');
    // alert(name);
    // $('.smart-cf-field-type-select select').each(function(index, element){
    //   var name = $(this).attr('name');
      
    //   var str2 = name.replace(/[^0-9^\.]/g,""); //"123.123"
    //   parseInt(str2, 10); //123
    //   alert(str2);
      
    // });
    $('.smart-cf-field-type-select select').each(function(index, element){
      var name = $(this).attr('name');
      
      var str2 = name.replace(/[^0-9^\.]/g,""); //"123.123"
      parseInt(str2, 10); //123
      // alert(str2);
      $('input[name="smart-custom-fields[title_type][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[full_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[full_image][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[movie_image][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[movie][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[column_2_type][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[column_2_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[column_2_image_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[column_2_text_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[column_2_image_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[info_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[info_note_em][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[info_note][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      
      
      var val = $(this).val();
      if(val == "topics_area1"){
        $('select[name="smart-custom-fields[topics_area][' + str2 + ']"]').after('<div class="topics_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/news-topic2.png" alt=""></p></div>');
        $('input[name="smart-custom-fields[title_type][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        $('textarea[name="smart-custom-fields[title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        $('textarea[name="smart-custom-fields[full_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        $('input[name="smart-custom-fields[full_image][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        $('input[name="smart-custom-fields[column_2_image_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        $('input[name="smart-custom-fields[column_2_image_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
      }else if(val == "topics_area2"){
        $('select[name="smart-custom-fields[topics_area][' + str2 + ']"]').after('<div class="topics_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/news-topic1.png" alt=""></p></div>');
        $('textarea[name="smart-custom-fields[info_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        $('textarea[name="smart-custom-fields[info_note_em][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        $('textarea[name="smart-custom-fields[info_note][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
      }else if(val == "topics_area3"){
        $('select[name="smart-custom-fields[topics_area][' + str2 + ']"]').after('<div class="topics_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/news-movie.png" alt=""></p></div>');
        $('input[name="smart-custom-fields[movie_image][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        $('input[name="smart-custom-fields[movie][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
      }
    });

    $('.smart-cf-field-type-select select').change(function(){
      var name = $(this).attr('name');
      
      var str = name.replace(/[^0-9^\.]/g,""); //"123.123"
      parseInt(str, 10); //123
      // alert(str);
      $('input[name="smart-custom-fields[title_type][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[full_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[full_image][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[movie_image][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[movie][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[column_2_type][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[column_2_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[column_2_image_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[column_2_text_2][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('input[name="smart-custom-fields[column_2_image_2][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[info_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[info_note_em][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      $('textarea[name="smart-custom-fields[info_note][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      
      $('select[name="smart-custom-fields[topics_area][' + str + ']"]').parent().find('.topics_area-image-sample').remove();
      var val = $(this).val();
      if(val == "topics_area1"){
        $('select[name="smart-custom-fields[topics_area][' + str + ']"]').after('<div class="topics_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/news-topic2.png" alt=""></p></div>');
        $('input[name="smart-custom-fields[title_type][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        $('textarea[name="smart-custom-fields[title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        $('textarea[name="smart-custom-fields[full_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        $('input[name="smart-custom-fields[full_image][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        $('input[name="smart-custom-fields[column_2_image_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        $('input[name="smart-custom-fields[column_2_image_2][' + str + ']"]').parent().parent().parent().parent().css('display','table');
      }else if(val == "topics_area2"){
        $('select[name="smart-custom-fields[topics_area][' + str + ']"]').after('<div class="topics_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/news-topic1.png" alt=""></p></div>');
        $('textarea[name="smart-custom-fields[info_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        $('textarea[name="smart-custom-fields[info_note_em][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        $('textarea[name="smart-custom-fields[info_note][' + str + ']"]').parent().parent().parent().parent().css('display','table');
      }else if(val == "topics_area3"){
        $('select[name="smart-custom-fields[topics_area][' + str + ']"]').after('<div class="topics_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/news-movie.png" alt=""></p></div>');
        $('input[name="smart-custom-fields[movie_image][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        $('input[name="smart-custom-fields[movie][' + str + ']"]').parent().parent().parent().parent().css('display','table');
      }
    });
  });
  
  
})(jQuery);