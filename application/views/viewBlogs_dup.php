<?php $blog[ 'blog_description']=$this->SqlModel->getRecords('*', 'blog', '', '', array('blog_slug'=>$_GET['blog_slug'], 'blog_status'=>'published')); ?>

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

hr {
    margin: 5% auto;
}

#circle-shape-example {
    font-family: Open Sans, sans-serif;
    margin: 2% 2% 2% 2%;
}

#circle-shape-example p {
    line-height: 1.8;
}

#circle-shape-example .curve {
    height: 200px;
    max-width: 200px;
    max-height: 200px;
    float: left;
    margin-right: 3rem;
    border-radius: 50%;
    -webkit-shape-outside: circle();
    shape-outside: circle();
}

.author {
    color: grey;
    font-size: 12px;
}
</style>


<style>
.comments {
    /* box-shadow: 0px 9px 0px 0px rgba(255, 255, 255, 0), 0px -9px 0px 0px rgba(255, 255, 255, 0), 10px 0px 30px 0px rgba(0, 0, 0, 0.15), -10px 0px 30px 0px rgba(0, 0, 0, 0.15); */
    width: 100%;
    min-height: 150px;
    position: relative;
    margin: 15px auto;
    padding: 20px;
    font-family: "Helvetica Neue", arial, sans-serif;
    font-size: 15px;
}

.comments .loader {
    height: 45px;
    width: 45px;
    border: 4.5px solid rgba(0, 0, 0, 0.2);
    border-radius: 50%;
    border-left-color: #000;
    position: absolute;
    top: 70px;
    left: 245.5px;
    -webkit-animation: rotating 0.9s infinite linear;
    -moz-animation: rotating 0.9s infinite linear;
    -o-animation: rotating 0.9s infinite linear;
    animation: rotating 0.9s infinite linear;
}

.comments .inner {
    display: none;
}

.comments .inner .comment {
    border: 1px dashed #ccc;
    padding: 15px;
    min-height: 48px;
    margin-bottom: 10px;
    color: #ccc;
}

.comments .inner .comment .avatar {
    width: 48px;
    height: 48px;
    float: left;
}

.comments .inner .comment .body {
    margin-left: 55px;
}

.comments .inner .comment .body p {
    color: black;
}

.comments .inner .comment:hover {
    color: rgba(0, 39, 59, 0.35);
    background-color: rgba(200, 200, 200, 0.1);
    border-style: solid;
}

.add-new {
    margin-bottom: 55px;
}

.add-new .input {
    display: block;
    width: 100%;
    border: 3px solid #ccc;
    color: #888;
    padding: 8px 10px;
    outline: 0;
    font-family: "Helvetica Neue", arial, sans-serif;
    font-size: 15px;
}

.add-new .input.your-name {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.add-new .input.your-name.dived {
    margin-top: 2px;
    padding: 9px 10px 11px 10px;
}

.add-new .input.your-msg {
    margin-top: -5px;
    max-width: 100%;
    max-height: 150px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

.add-new .send-msg {
    border: 3px solid #ccc;
    color: #888;
    text-transform: uppercase;
    font-weight: bold;
    border-radius: 5px;
    padding: 8px 10px;
    background-color: transparent;
    outline: 0;
    float: right;
    margin-right: -1px;
    margin-top: 2px;
    cursor: pointer;
}

.add-new .send-msg:hover {
    color: white;
    background-color: #ccc;
}

a {
    color: #66b34e;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>



<div class="clearfix"></div>

<!--our satisfied customer Start -->
<section class="top_banner" style="background-image:url('./uploads/pages/bannerBlog.jpg')">
</section>
<!-- osc-->

<div id="circle-shape-example">
    <img src="<?php echo $blog[ 'blog_description'][0]['blog_feature_image'];  ?>"
        alt="A photograph of sliced kiwifruit on a while plate" class="curve">
    <h1>KiwiFruit</h1>
    <p class="author"><b>Author :</b> Optimistic Future
        <br /><b>Date :</b>
        <?php $date=date_create($blog[ 'blog_description'][0]['blog_added']); echo date_format($date,"d/m/Y"); ?>
    </p>


    <p><?php  echo $blog[ 'blog_description'][0]['blog_details']; ?>
    </p>
    <hr />
    <!-- <div class='comments'>
        <div class='loader'></div>
        <div class='inner'>
            <div class='add-new'>
                <input class='input your-name' placeholder='Type your name here...' type='text'>
                <textarea class='input your-msg' placeholder='Type your message here...'></textarea>
                <button class='send-msg'>Send message</button>
            </div>
        </div>
    </div> -->


</div>








<script
    src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'>
</script>
<script>
var defaultAvatar = 'https://i.imgur.com/BDuNOi3.png';
var guestuserId = Math.floor(Math.random() * (150 - 10 + 1)) + 10;
var guestusername = '';

function stopLoader() {
    $('.loader').fadeOut('slow', function() {
        $('.comments .inner').fadeIn('slow');
    });
}

$(function() {
    /*
    You can paste here PHP code block to catch all comments
    (or connect it with JSON, if you know how)
    Example:
    <?php
    	while($data = mysqli_fetch_object($comments_query)) {
      	echo '{';
      	echo "userid: {$data->userID}, name: {$data->username}... and so on";
      	echo '},';
      }
    ?>
    */
    var allComments = [{
            userid: '1',
            name: 'Tester 1',
            avatar: 'default',
            before: '5 minutes before',
            message: 'That is cool!'
        },
        {
            userid: '2',
            name: 'Chuck Norris',
            avatar: 'https://i.imgur.com/Nl7oXdq.png',
            before: '15 minutes before',
            message: 'I can totally say, that is not good as me, but whatever.'
        },
        {
            userid: '3',
            name: 'Demo',
            avatar: 'default',
            before: '30 minutes before',
            message: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum non justo ut accumsan. Pellentesque hendrerit vitae urna at faucibus.'
        }
    ];
    var loaded = 0;

    $.each(allComments, function(i, val) {
        var comment = $('<div class="comment"></div>');
        var avatar = this.avatar == 'default' ? defaultAvatar : this.avatar;
        $('<img class="avatar" alt="avatar" src="' + avatar + '" />').appendTo(comment);
        var contents = $('<div class="body"></div>');
        $('<a href="./users/' + this.userid + '/" target="_blank">' + this.name + '</a>').appendTo(
            contents);
        $('<span> • ' + this.before + '</span><br /><br />').appendTo(contents);
        $('<p>' + this.message + '</p>').appendTo(contents);

        contents.appendTo(comment);
        comment.appendTo('.comments .inner');
        loaded++;
    });

    if (loaded == allComments.length) stopLoader();

    $('.send-msg').click(function() {
        var name = $('.your-name').val();
        var msg = $('.your-msg').val();
        var comment = $('<div class="comment" style="display: none;"></div>');
        var contents = $('<div class="body"></div>');

        if ((name == '' && guestusername == '') || msg == '') return false;
        guestusername = guestusername == '' ? name : guestusername;
        $('.your-msg').val("");

        $('.your-name').fadeOut().remove();
        $('.your-msg').before('<div class="input your-name dived">' + guestusername + '</div>');

        $('<img class="avatar" alt="avatar" src="' + defaultAvatar + '" />').appendTo(comment);
        $('<a href="./users/' + guestuserId + '/" target="_blank">' + guestusername + '</a>').appendTo(
            contents);
        $('<span> • Right now</span><br /><br />').appendTo(contents);
        $('<p>' + msg + '</p>').appendTo(contents);

        contents.appendTo(comment);
        $('.add-new').after(comment);
        comment.fadeIn('slow');
    });
});
//# sourceURL=pen.js
</script>