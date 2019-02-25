
alert("hello i'm successfull");

$.ajax({
    url : "<?php echo base_url(); ?>manage/pages.php",
    type : "POST",
    dataType : "json",
    data : {"account" : "account value", "passwd" : "passwd value"},
    success : function(data) {
        console.log("helllllloo world");
    },
    error : function(data) {
        console.log("helllllloo world error");
    }
});