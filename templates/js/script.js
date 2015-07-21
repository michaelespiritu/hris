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
function getSubject(str){
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
        xmlhttp.open("GET","get_subject.php?q="+str,true);
        xmlhttp.send();
    }
}
$('#subject_create').click(function(){

    if($('input[type="text"]').val() == ''){
        $('input[type="text"]').css({
          border: "1px red solid"
        });
        event.preventDefault();
    }else{
        return true;
    }

});