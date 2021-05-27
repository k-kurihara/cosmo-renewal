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
      // alert(name);
      var str2 = name.replace(/[^0-9^\.]/g,""); //"123.123"
      parseInt(str2, 10); //123

      var pattern1 = 'lp_area_a';
      var pattern2 = 'lp_area_b';
      var pattern3 = 'lp_area_c';
      var pattern4 = 'lp_area_d';
      if(name.indexOf(pattern1) > -1){
        // 部分一致のときの処理
        // alert("ok a");
        $('textarea[name="smart-custom-fields[lp_step_blue_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      
        $('input[name="smart-custom-fields[lp_step_blue_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_blue_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_blue_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_step_blue_image_1][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');


        $('textarea[name="smart-custom-fields[lp_step_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[lp_step_brown_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_brown_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_brown_title_tertiary_1_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_brown_title_tertiary_1_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_brown_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[lp_image_wide][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_title_type][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');


        $('input[name="smart-custom-fields[lp_colmn_left_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_colmn_left_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_colmn_left_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_colmn_right_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_colmn_right_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_colmn_right_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_textarea_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_textare_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_link_text][' + str2 + ']"]').parent().parent().parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_3column_bigtitle][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_3column_image_a][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_title_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_text_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[lp_3column_image_b][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_title_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_text_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[lp_3column_image_c][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_title_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_text_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        
        
        var val = $(this).val();
        if(val == "lp_area1"){
          $('select[name="smart-custom-fields[lp_area_a][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic1.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[lp_step_blue_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area2"){
          $('select[name="smart-custom-fields[lp_area_a][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic2-t1.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[lp_step_blue_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_blue_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_blue_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[lp_step_blue_image_1][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area3"){
          $('select[name="smart-custom-fields[lp_area_a][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic3-t1.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[lp_step_brown_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_brown_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_brown_title_tertiary_1_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_brown_title_tertiary_1_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_brown_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area4"){
          $('select[name="smart-custom-fields[lp_area_a][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic4.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[lp_image_wide][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[lp_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area5"){
          $('select[name="smart-custom-fields[lp_area_a][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic5.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[lp_colmn_left_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_colmn_left_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_colmn_left_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[lp_colmn_right_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_colmn_right_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_colmn_right_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area6"){
          $('select[name="smart-custom-fields[lp_area_a][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic6.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[lp_textarea_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_textare_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area7"){
          $('select[name="smart-custom-fields[lp_area_a][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic7.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[lp_link_text][' + str2 + ']"]').parent().parent().parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area8"){
          $('select[name="smart-custom-fields[lp_area_a][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic8.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[lp_3column_bigtitle][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[lp_3column_image_a][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_title_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_text_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[lp_3column_image_b][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_title_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_text_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[lp_3column_image_c][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_title_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_text_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }

        
      }else if(name.indexOf(pattern2) > -1){
        // 部分一致のときの処理
        // alert("ok b");
        $('textarea[name="smart-custom-fields[b_lp_step_blue_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      
        $('input[name="smart-custom-fields[b_lp_step_blue_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_blue_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_blue_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_step_blue_image_1][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');


        $('textarea[name="smart-custom-fields[b_lp_step_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[b_lp_step_brown_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_brown_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_brown_title_tertiary_1_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_brown_title_tertiary_1_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_brown_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[b_lp_image_wide][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_title_type][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');


        $('input[name="smart-custom-fields[b_lp_colmn_left_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_colmn_left_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_colmn_left_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_colmn_right_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_colmn_right_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_colmn_right_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_textarea_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_textare_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_link_text][' + str2 + ']"]').parent().parent().parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_3column_bigtitle][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_3column_image_a][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_title_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_text_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[b_lp_3column_image_b][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_title_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_text_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[b_lp_3column_image_c][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_title_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_text_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        
        var val = $(this).val();
        if(val == "lp_area1"){
          $('select[name="smart-custom-fields[lp_area_b][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic1-b.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[b_lp_step_blue_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area2"){
          $('select[name="smart-custom-fields[lp_area_b][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic2.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[b_lp_step_blue_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_blue_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_blue_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[b_lp_step_blue_image_1][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area3"){
          $('select[name="smart-custom-fields[lp_area_b][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic3-b.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[b_lp_step_brown_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_brown_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_brown_title_tertiary_1_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_brown_title_tertiary_1_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_brown_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area4"){
          $('select[name="smart-custom-fields[lp_area_b][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic4.png-b" alt=""></p></div>');
          $('input[name="smart-custom-fields[b_lp_image_wide][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[b_lp_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area5"){
          $('select[name="smart-custom-fields[lp_area_b][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic5-b.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[b_lp_colmn_left_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_colmn_left_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_colmn_left_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[b_lp_colmn_right_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_colmn_right_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_colmn_right_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area6"){
          $('select[name="smart-custom-fields[lp_area_b][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic6-b.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[b_lp_textarea_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_textare_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area7"){
          $('select[name="smart-custom-fields[lp_area_b][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic7-b.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[b_lp_link_text][' + str2 + ']"]').parent().parent().parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area8"){
          $('select[name="smart-custom-fields[lp_area_b][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic8-b.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[b_lp_3column_bigtitle][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[b_lp_3column_image_a][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_title_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_text_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[b_lp_3column_image_b][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_title_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_text_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[b_lp_3column_image_c][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_title_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_text_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }

      }else if(name.indexOf(pattern3) > -1){
        // 部分一致のときの処理
        // alert("ok b");
        $('textarea[name="smart-custom-fields[c_lp_step_blue_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      
        $('input[name="smart-custom-fields[c_lp_step_blue_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_blue_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_blue_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_step_blue_image_1][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');


        $('textarea[name="smart-custom-fields[c_lp_step_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[c_lp_step_brown_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_brown_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_brown_title_tertiary_1_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_brown_title_tertiary_1_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_brown_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[c_lp_image_wide][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_title_type][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[c_lp_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');


        $('input[name="smart-custom-fields[c_lp_colmn_left_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_colmn_left_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_colmn_left_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_colmn_right_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_colmn_right_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[c_lp_colmn_right_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[c_lp_textarea_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_textare_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[c_lp_link_text][' + str2 + ']"]').parent().parent().parent().parent().parent().parent().css('display','none');

        
        $('textarea[name="smart-custom-fields[c_lp_3column_bigtitle][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_3column_image_a][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_title_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_text_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[c_lp_3column_image_b][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_title_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_text_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[c_lp_3column_image_c][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_title_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_text_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        
        var val = $(this).val();
        if(val == "lp_area1"){
          $('select[name="smart-custom-fields[lp_area_c][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic1-g.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[c_lp_step_blue_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area2"){
          $('select[name="smart-custom-fields[lp_area_c][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic2-g.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[c_lp_step_blue_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_blue_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_blue_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[c_lp_step_blue_image_1][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area3"){
          $('select[name="smart-custom-fields[lp_area_c][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic3.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[c_lp_step_brown_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_brown_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_brown_title_tertiary_1_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_brown_title_tertiary_1_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_brown_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area4"){
          $('select[name="smart-custom-fields[lp_area_c][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic4-g.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[c_lp_image_wide][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[c_lp_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area5"){
          $('select[name="smart-custom-fields[lp_area_c][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic5-g.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[c_lp_colmn_left_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_colmn_left_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_colmn_left_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[c_lp_colmn_right_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_colmn_right_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_colmn_right_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area6"){
          $('select[name="smart-custom-fields[lp_area_c][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic6-g.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[c_lp_textarea_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_textare_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area7"){
          $('select[name="smart-custom-fields[lp_area_c][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic7-g.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[c_lp_link_text][' + str2 + ']"]').parent().parent().parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area8"){
          $('select[name="smart-custom-fields[lp_area_c][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic8-g.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[c_lp_3column_bigtitle][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[c_lp_3column_image_a][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_title_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_text_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[c_lp_3column_image_b][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_title_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_text_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[c_lp_3column_image_c][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_title_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_text_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }
      // alert(str2);
      }else if(name.indexOf(pattern4) > -1){
        // 部分一致のときの処理
        // alert("ok b");
        $('textarea[name="smart-custom-fields[d_lp_step_blue_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
      
        $('input[name="smart-custom-fields[d_lp_step_blue_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_blue_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_blue_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_step_blue_image_1][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');


        $('textarea[name="smart-custom-fields[d_lp_step_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[d_lp_step_brown_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_brown_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_brown_title_tertiary_1_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_brown_title_tertiary_1_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_brown_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[d_lp_image_wide][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_title_type][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[d_lp_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');


        $('input[name="smart-custom-fields[d_lp_colmn_left_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_colmn_left_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_colmn_left_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_colmn_right_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_colmn_right_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[d_lp_colmn_right_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[d_lp_textarea_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_textare_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[d_lp_link_text][' + str2 + ']"]').parent().parent().parent().parent().parent().parent().css('display','none');

        
        $('textarea[name="smart-custom-fields[d_lp_3column_bigtitle][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_3column_image_a][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_title_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_text_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[d_lp_3column_image_b][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_title_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_text_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[d_lp_3column_image_c][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_title_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_text_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','none');
        
        var val = $(this).val();
        if(val == "lp_area1"){
          $('select[name="smart-custom-fields[lp_area_d][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic1.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[d_lp_step_blue_title_primary][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area2"){
          $('select[name="smart-custom-fields[lp_area_d][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic2-t1.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[d_lp_step_blue_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_blue_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_blue_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[d_lp_step_blue_image_1][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area3"){
          $('select[name="smart-custom-fields[lp_area_d][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic3.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[d_lp_step_brown_label_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_brown_title_secondary_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_brown_title_tertiary_1_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_brown_title_tertiary_1_2][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_brown_text_1][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area4"){
          $('select[name="smart-custom-fields[lp_area_d][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic4.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[d_lp_image_wide][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[d_lp_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area5"){
          $('select[name="smart-custom-fields[lp_area_d][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic5.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[d_lp_colmn_left_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_colmn_left_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_colmn_left_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[d_lp_colmn_right_image][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_colmn_right_title][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_colmn_right_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area6"){
          $('select[name="smart-custom-fields[lp_area_d][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic6.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[d_lp_textarea_title_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_textare_text][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area7"){
          $('select[name="smart-custom-fields[lp_area_d][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic7.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[d_lp_link_text][' + str2 + ']"]').parent().parent().parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area8"){
          $('select[name="smart-custom-fields[lp_area_d][' + str2 + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic8.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[d_lp_3column_bigtitle][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[d_lp_3column_image_a][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_title_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_text_a][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[d_lp_3column_image_b][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_title_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_text_b][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[d_lp_3column_image_c][' + str2 + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_title_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_text_c][' + str2 + ']"]').parent().parent().parent().parent().css('display','table');
        }
      // alert(str2);
      }
    });

    $('.smart-cf-field-type-select select').change(function(){
      var name = $(this).attr('name');
      // alert(name);
      var str = name.replace(/[^0-9^\.]/g,""); //"123.123"
      parseInt(str, 10); //123
      // alert(str);
      var pattern1 = 'lp_area_a';
      var pattern2 = 'lp_area_b';
      var pattern3 = 'lp_area_c';
      var pattern4 = 'lp_area_d';
      if(name.indexOf(pattern1) > -1){
        // 部分一致のときの処理
        // alert("ok a");
        $('textarea[name="smart-custom-fields[lp_step_blue_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      
        $('input[name="smart-custom-fields[lp_step_blue_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_blue_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_blue_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_step_blue_image_1][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');


        $('textarea[name="smart-custom-fields[lp_step_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[lp_step_brown_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_brown_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_brown_title_tertiary_1_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_brown_title_tertiary_1_2][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_step_brown_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[lp_image_wide][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_title_type][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');


        $('input[name="smart-custom-fields[lp_colmn_left_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_colmn_left_title][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_colmn_left_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_colmn_right_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_colmn_right_title][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_colmn_right_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_textarea_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_textare_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[lp_link_text][' + str + ']"]').parent().parent().parent().parent().parent().parent().css('display','none');
        
        $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').parent().find('.lp_area-image-sample').remove();

        
        $('textarea[name="smart-custom-fields[lp_3column_bigtitle][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[lp_3column_image_a][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_title_a][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_text_a][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[lp_3column_image_b][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_title_b][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_text_b][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[lp_3column_image_c][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_title_c][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[lp_3column_text_c][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        var val = $(this).val();
        if(val == "lp_area1"){
          $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic1.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[lp_step_blue_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area2"){
          $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic2-t1.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[lp_step_blue_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_blue_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_blue_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[lp_step_blue_image_1][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area3"){
          $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic3-t1.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[lp_step_brown_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_brown_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_brown_title_tertiary_1_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_brown_title_tertiary_1_2][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_step_brown_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area4"){
          $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic4.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[lp_image_wide][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[lp_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area5"){
          $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic5.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[lp_colmn_left_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_colmn_left_title][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_colmn_left_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[lp_colmn_right_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_colmn_right_title][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_colmn_right_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area6"){
          $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic6.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[lp_textarea_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_textare_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area7"){
          $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic7.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[lp_link_text][' + str + ']"]').parent().parent().parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area8"){
          $('select[name="smart-custom-fields[lp_area_a][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic8.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[lp_3column_bigtitle][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[lp_3column_image_a][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_title_a][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_text_a][' + str + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[lp_3column_image_b][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_title_b][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_text_b][' + str + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[lp_3column_image_c][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_title_c][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[lp_3column_text_c][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }
      }else if(name.indexOf(pattern2) > -1){
        // 部分一致のときの処理
        // alert("ok b");
        $('textarea[name="smart-custom-fields[b_lp_step_blue_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      
        $('input[name="smart-custom-fields[b_lp_step_blue_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_blue_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_blue_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_step_blue_image_1][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');


        $('textarea[name="smart-custom-fields[b_lp_step_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[b_lp_step_brown_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_brown_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_brown_title_tertiary_1_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_brown_title_tertiary_1_2][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_step_brown_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[b_lp_image_wide][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_title_type][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');


        $('input[name="smart-custom-fields[b_lp_colmn_left_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_colmn_left_title][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_colmn_left_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_colmn_right_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_colmn_right_title][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_colmn_right_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_textarea_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_textare_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[b_lp_link_text][' + str + ']"]').parent().parent().parent().parent().parent().parent().css('display','none');

        $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').parent().find('.lp_area-image-sample').remove();
        
        $('textarea[name="smart-custom-fields[b_lp_3column_bigtitle][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[b_lp_3column_image_a][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_title_a][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_text_a][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[b_lp_3column_image_b][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_title_b][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_text_b][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[b_lp_3column_image_c][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_title_c][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[b_lp_3column_text_c][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        
        var val = $(this).val();
        if(val == "lp_area1"){
          $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic1-b.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[b_lp_step_blue_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area2"){
          $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic2.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[b_lp_step_blue_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_blue_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_blue_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[b_lp_step_blue_image_1][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area3"){
          $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic3-b.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[b_lp_step_brown_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_brown_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_brown_title_tertiary_1_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_brown_title_tertiary_1_2][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_step_brown_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area4"){
          $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic4-b.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[b_lp_image_wide][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[b_lp_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area5"){
          $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic5-b.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[b_lp_colmn_left_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_colmn_left_title][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_colmn_left_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[b_lp_colmn_right_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_colmn_right_title][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_colmn_right_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area6"){
          $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic6-b.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[b_lp_textarea_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_textare_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area7"){
          $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic7-b.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[b_lp_link_text][' + str + ']"]').parent().parent().parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area8"){
          $('select[name="smart-custom-fields[lp_area_b][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic8-b.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[b_lp_3column_bigtitle][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[b_lp_3column_image_a][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_title_a][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_text_a][' + str + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[b_lp_3column_image_b][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_title_b][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_text_b][' + str + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[b_lp_3column_image_c][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_title_c][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[b_lp_3column_text_c][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }
      }else if(name.indexOf(pattern3) > -1){
        // 部分一致のときの処理
        // alert("ok b");
        $('textarea[name="smart-custom-fields[c_lp_step_blue_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      
        $('input[name="smart-custom-fields[c_lp_step_blue_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_blue_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_blue_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_step_blue_image_1][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');


        $('textarea[name="smart-custom-fields[c_lp_step_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[c_lp_step_brown_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_brown_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_brown_title_tertiary_1_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_brown_title_tertiary_1_2][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_step_brown_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[c_lp_image_wide][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_title_type][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[c_lp_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');


        $('input[name="smart-custom-fields[c_lp_colmn_left_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_colmn_left_title][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_colmn_left_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_colmn_right_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_colmn_right_title][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[c_lp_colmn_right_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[c_lp_textarea_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_textare_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[c_lp_link_text][' + str + ']"]').parent().parent().parent().parent().parent().parent().css('display','none');

        $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').parent().find('.lp_area-image-sample').remove();

        
        $('textarea[name="smart-custom-fields[c_lp_3column_bigtitle][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[c_lp_3column_image_a][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_title_a][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_text_a][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[c_lp_3column_image_b][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_title_b][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_text_b][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[c_lp_3column_image_c][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_title_c][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[c_lp_3column_text_c][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        
        var val = $(this).val();
        if(val == "lp_area1"){
          $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic1-g.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[c_lp_step_blue_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area2"){
          $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic2-g.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[c_lp_step_blue_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_blue_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_blue_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[c_lp_step_blue_image_1][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area3"){
          $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic3.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[c_lp_step_brown_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_brown_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_brown_title_tertiary_1_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_brown_title_tertiary_1_2][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_step_brown_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area4"){
          $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic4-g.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[c_lp_image_wide][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[c_lp_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area5"){
          $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic5-g.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[c_lp_colmn_left_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_colmn_left_title][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_colmn_left_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[c_lp_colmn_right_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_colmn_right_title][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_colmn_right_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area6"){
          $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic6-g.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[c_lp_textarea_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_textare_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area7"){
          $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic7-g.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[c_lp_link_text][' + str + ']"]').parent().parent().parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area8"){
          $('select[name="smart-custom-fields[lp_area_c][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic8-g.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[c_lp_3column_bigtitle][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[c_lp_3column_image_a][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_title_a][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_text_a][' + str + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[c_lp_3column_image_b][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_title_b][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_text_b][' + str + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[c_lp_3column_image_c][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_title_c][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[c_lp_3column_text_c][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }
      }else if(name.indexOf(pattern4) > -1){
        // 部分一致のときの処理
        // alert("ok b");
        $('textarea[name="smart-custom-fields[d_lp_step_blue_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','none');
      
        $('input[name="smart-custom-fields[d_lp_step_blue_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_blue_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_blue_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_step_blue_image_1][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');


        $('textarea[name="smart-custom-fields[d_lp_step_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[d_lp_step_brown_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_brown_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_brown_title_tertiary_1_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_brown_title_tertiary_1_2][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_step_brown_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[d_lp_image_wide][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_title_type][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[d_lp_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');


        $('input[name="smart-custom-fields[d_lp_colmn_left_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_colmn_left_title][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_colmn_left_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_colmn_right_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_colmn_right_title][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[d_lp_colmn_right_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[d_lp_textarea_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_textare_text][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('textarea[name="smart-custom-fields[d_lp_link_text][' + str + ']"]').parent().parent().parent().parent().parent().parent().css('display','none');

        $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').parent().find('.lp_area-image-sample').remove();

        $('textarea[name="smart-custom-fields[d_lp_3column_bigtitle][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('input[name="smart-custom-fields[d_lp_3column_image_a][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_title_a][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_text_a][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[d_lp_3column_image_b][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_title_b][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_text_b][' + str + ']"]').parent().parent().parent().parent().css('display','none');

        $('input[name="smart-custom-fields[d_lp_3column_image_c][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_title_c][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        $('textarea[name="smart-custom-fields[d_lp_3column_text_c][' + str + ']"]').parent().parent().parent().parent().css('display','none');
        
        var val = $(this).val();
        if(val == "lp_area1"){
          $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic1.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[d_lp_step_blue_title_primary][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area2"){
          $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic2-t1.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[d_lp_step_blue_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_blue_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_blue_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[d_lp_step_blue_image_1][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area3"){
          $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic3.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[d_lp_step_brown_label_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_brown_title_secondary_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_brown_title_tertiary_1_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_brown_title_tertiary_1_2][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_step_brown_text_1][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area4"){
          $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic4.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[d_lp_image_wide][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[d_lp_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area5"){
          $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic5.png" alt=""></p></div>');
          $('input[name="smart-custom-fields[d_lp_colmn_left_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_colmn_left_title][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_colmn_left_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[d_lp_colmn_right_image][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_colmn_right_title][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_colmn_right_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area6"){
          $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic6.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[d_lp_textarea_title_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_textare_text][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area7"){
          $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic7.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[d_lp_link_text][' + str + ']"]').parent().parent().parent().parent().parent().parent().css('display','table');
        }else if(val == "lp_area8"){
          $('select[name="smart-custom-fields[lp_area_d][' + str + ']"]').after('<div class="lp_area-image-sample"><p>表示例</p><p style="width:50%;"><img src="/assets/images/admin/lp-topic8.png" alt=""></p></div>');
          $('textarea[name="smart-custom-fields[d_lp_3column_bigtitle][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('input[name="smart-custom-fields[d_lp_3column_image_a][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_title_a][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_text_a][' + str + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[d_lp_3column_image_b][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_title_b][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_text_b][' + str + ']"]').parent().parent().parent().parent().css('display','table');

          $('input[name="smart-custom-fields[d_lp_3column_image_c][' + str + ']"][type="hidden"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_title_c][' + str + ']"]').parent().parent().parent().parent().css('display','table');
          $('textarea[name="smart-custom-fields[d_lp_3column_text_c][' + str + ']"]').parent().parent().parent().parent().css('display','table');
        }
      }
    });
  });
  
  
})(jQuery);