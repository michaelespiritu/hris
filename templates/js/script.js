$( document ).ready( function() {
   $('[name=body_message]').ckeditor(); // Use CKEDITOR.replace() 
   $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: $.now(),
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: 'http://hris.dev/get_calendar_view.php'
    });
   $('#activity').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: $.now(),
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: 'http://hris.dev/all_activity.php'
    });
}); // end of document ready

$(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","get_user.php?q="+str,true);
        xmlhttp.send();
    }
}

var x = 1;
$('#add_subject').click(function(){
    x++;
    $('#subject_box').append('<div class="well"><div class="form-group"><label for="first_name">Subject Code</label> <input type="text" class="form-control" name="subject_code_'+x+'" placeholder="Subject Code"></div><div class="form-group"> <label for="first_name">Subject Name</label>  <input type="text" class="form-control" name="subject_name_'+x+'" placeholder="Subject Name"></div> </div>');
    $('[name=total_count]').val(x);
});
function getCourse(str){
     if (str == "") {
        document.getElementById("subject_box").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("subject_box").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","get_course.php?q="+str,true);
        xmlhttp.send();
    }
}
$('#form-required').click(function(){


    $('.required-form').each(function(){
        $(this).css('border-color',''); 
        if(!$.trim($(this).val())){ //if this field is empty 
            $(this).css('border-color','red'); //change border color to red   
            $('.cke').css('border-color','red'); //change border color to red   
           event.preventDefault();
        }else{
            return true;
        }
    });
});

function update(target){
     $.ajax({
        url: "read_message.php",
        type: "POST",
        data: { 'id': target, 'read': '1' },                   
        success: function(data)
        {
           $('#readmessage-'+target).removeClass();
           
           setInterval(function() {$('#readmessage-'+target).addClass('glyphicon glyphicon-star-empty');}, 500);
        }
    });
}

