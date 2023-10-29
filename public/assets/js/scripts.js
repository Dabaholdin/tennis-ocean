// Header fix
$(document).ready(function(){
    let header = $('.header');
    let headerHight = header.height() + 48;
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            header.addClass('header_fixed');
            $('body').css({
                'paddingTop': headerHight + 'px' // делаем отступ у body, равный высоте шапки
            });
        } else {
            header.removeClass('header_fixed');
            $('body').css({
                'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
            })
        }
    })
    function saveChild(e){ 
        console.log(e)
    }
    // Открытие формы сохранения/редактирования детей
    $('button[data-func="saveChild"]').click(function(e){
        e.preventDefault();
        let child_arr =[];
        let child_card_length = $('.edit-child div.children_wrapper');
        
        for(i=0;i<child_card_length.length;i++){
            let child_obj ={};
            if($(child_card_length[i]).find('input.changed').length !=0 ){
                let inputs = $(child_card_length[i]).find('input');
                console.log($(child_card_length[i]));
                
                for(b=0 ; b<inputs.length ; b++){
                    
                    console.log(inputs[b])
  
                    if($(inputs[b]).attr('name') == 'uid'){
                        child_obj.uid = $(inputs[b]).val();
                    }else if($(inputs[b]).attr('name') =='first_name' && $(inputs[b]).hasClass('changed')){
                        child_obj.first_name = $(inputs[b]).val();
                    }else if($(inputs[b]).attr('name') =='last_name' && $(inputs[b]).hasClass('changed')){
                        child_obj.last_name = $(inputs[b]).val();
                    }else if($(inputs[b]).attr('name') =='birth_date' && $(inputs[b]).hasClass('changed')){
                        child_obj.birth_date = $(inputs[b]).val();
                    }else if($(inputs[b]).attr('name') =='gender_male' && $(inputs[b]).hasClass('changed')){
                        child_obj.gender_male = $(inputs[b]).val();
                    }else if($(inputs[b]).attr('name') =='gender_female' && $(inputs[b]).hasClass('changed')){
                        child_obj.gender_female = $(inputs[b]).val();
                    }
                    
                }
                
                child_arr.push(child_obj);

            }
            console.log(child_arr);
        }
        
        // e.preventDefault();
        // console.log(e)
        // let formData = {
        //     t:'wdewd'
        // }
        // $.ajaxSetup({
        //     headers: {
        //         "X-CSRF-TOKEN": $('.edit-child input[name="_token"]').val()
        //     }
        // })
        // $.ajax({
        //     type: 'POST',
        //     url: 'setings/edit',
        //     dataType: 'json',
        //     data: formData,
        //     success: function (data) {
        //         console.log(data)
        //     }
        // })
    })

    $('.children_wrapper input').change(function(e){
        if(!$(this).hasClass('changed') && $(this).val() != $(this).prop('defaultValue')){
            $(this).addClass('changed')
        }else{$(this).removeClass('changed')}
         
    })
    

})
