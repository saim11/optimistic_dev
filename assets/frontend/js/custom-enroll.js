var creq = null;
$(function(){

var form = $("#enrollForm");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});


form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
         $('#submitBtnappform').trigger('click');
    }
});

	});

function save_file(pdfOutput)
{
 
  $('#pdfdata').val(pdfOutput);
  
  if(creq!=null)
            {
              creq.abort(); 
            }

            creq = $.post(base_url+'home/doenroll', 
            $('form#enrollForm').serialize() , 
            function(data){             
              
             if(data.status=="true")
              {                
                
                location.reload();
                $('.alert-success').css('display','block');
              }
              
             }, "json");
}






 function checkSameAress(){  
  if($('#same_res_address').is(':checked')){
    $('#postal_address').css('display','none');
    $( "#postal_address input" ).each(function() {$( this ).removeClass( "required" );});
    $('#same_res_address').val("checked");
  }else{
     $('#postal_address').css('display','block');
     $( "#postal_address input" ).each(function() {$( this ).addClass( "required" );});
     $('#same_res_address').val("un-checked");
  }
  }

 function checkCountry(){  
  if($('#aus_country').is(':checked')){
    $('#other_country').css('display','none');
  $( "input#other_country" ).removeClass( "required" );
      $('#aus_country').val("checked");
  }else{
     $('#other_country').css('display','block');
      $( "input#other_country" ).addClass( "required" );
    $('#aus_country').val("un-checked");
  }
  }


 function checkLanguage(){  
  if($('#eng_language').is(':checked')){
    $('#other_laguages').css('display','none');
    $( "input#other_laguages" ).removeClass( "required" );
    $( "#eng_speaks input" ).each(function() {$( this ).removeClass( "required" );});
    $('#eng_speaks').css('display','none');
    $('#eng_language').val("checked");
  }else{
     $('#other_laguages').css('display','block');
       $( "#eng_speaks input" ).each(function() {$( this ).addClass( "required" );});
       $( "input#other_laguages" ).addClass( "required" );
       $('#eng_speaks').css('display','block');
    $('#eng_language').val("un-checked");
  }
  }

function checkdisability(e){
var check_disability = $('input[name="check_disability"]:checked').val();
if(check_disability=='Yes'){
$('#disability_area').css('display','block');
$("#disability_area input" ).each(function() {$( this ).addClass( "required" );});
}else{
$('#disability_area').css('display','none');
$("#disability_area input" ).each(function() {$( this ).removeClass( "required" );});
}
}

function preQuilificaion(e){

var pre_quilification = $('input[name="pre_quilification"]:checked').val();

if(pre_quilification=='Yes'){
$('#pre_quilification_box').css('display','block');
$("#pre_quilification_box input" ).each(function() {$( this ).addClass( "required" );});
}else{
$('#pre_quilification_box').css('display','none');
$("#pre_quilification_box input" ).each(function() {$( this ).removeClass( "required" );});
}

}

function find5star() { 

var find_5sti = $('input[name="find_5sti"]:checked').val();
if(find_5sti=='Other'){
$('#find_5sti_text').css('display','block');
$('#find_5sti_text').addClass('required');
}else{
$('#find_5sti_text').css('display','none');
$('#find_5sti_text').removeClass('required');
}

}

function studyReason(e) { 

var study_reason = $('input[name="study_reason"]:checked').val();
if(study_reason=='Other'){
$('#study_reason_text').css('display','block');
$('#study_reason_text').addClass('required');
}else{
$('#study_reason_text').css('display','none');
$('#study_reason_text').removeClass('required');
}

}

function pdf_make_html()
{
  var dd={
  content: [],
  styles: {
    header: {
      fontSize: 18,
      bold: true,
      margin: [0, 0, 0, 10]
    },
    subheader: {
      fontSize: 16,
      bold: true,
      margin: [0, 10, 0, 5]
    },
    tableExample: {
      margin: [0, 5, 0, 15]
    },
    tableHeader: {
      bold: true,
      fontSize: 13,
      color: 'black'
    }
  },
  defaultStyle: {
    // alignment: 'justify'
  }};
  $('.pdf_section').each(function(){
    //dd.content.push("hasan");
    
  var heading={ text: $(this).find('h5').html(), style: 'header' };
  dd.content.push(heading);
  var table={
            style: 'tableExample',
            table: {
                body: [
                    
                ]
            }
        };
    $(this).find('.form-group').each(function(){
    
    var lable=$(this).find('label').eq(0).html();
    var answer="";
    
      
      if($(this).has('input[type=radio]:checked').length)
      {
        
        answer=$(this).find('input[type=radio]:checked').val();
        if(answer == "Other")
        {
          answer=$(this).find('input[type=radio]:checked').parent().find('input:text').val();
        }
      
      }
      else if($(this).has('input[type=checkbox]:checked').length)
      {
      $(this).find('input[type=checkbox]:checked').each(function(){
        answer+=$(this).attr("data-value")+" ,";
      });
        
       
      }
      else if($(this).has('#other_country').length || $(this).has('#other_laguages').length)
      {
        answer=$(this).find('input:text').val(); 
      }
      else if($(this).has('input').length && !($(this).has('input[type=checkbox]').length) && !($(this).has('input[type=radio]').length) )
      {
      
        answer=$(this).find('input').val(); 
      
       
      }
      else if($(this).has('textarea').length)
      {
        answer=$(this).find('textarea').val();
        
      }
    else if($(this).has('select').length)
      {
        answer=$(this).find("select option:selected" ).text();
     
      }
      else
      {
        
      }
       if (typeof lable === "undefined") {
    lable="";
   }
    if (typeof answer === "undefined") {
    answer="";
   }
    var column=[lable, answer];
    table.table.body.push(column);

    if( lable.trim() == "Same as residential" && answer.trim() == "YES ,")
    {
      return false;
    }
  
    });
  dd.content.push(table);
  
  });
  
  //alert(dd);

    pdfMake.createPdf(dd).open();

  

}