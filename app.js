$(function() {
    // при нажатию на кнопку с типом submit
    $('#sendUrls input[type="submit"]').click(function(e) {
        e.preventDefault();
        // переменная, которая будет содержать данные серилизации
        var $data;
        $data = $(this).parent('form').serializeArray();
        $.ajax({
            url: $(this).parent('form').attr('action'),
            type: 'post',
            data: $data,
            success: function(result) {
                console.log(result);
                $('#form_result').html(result);
            } 
        })
    })
})
$(document).ready(function(){
    var controls = {
        video: $("#myvideo"),
        playpause: $("#playpause")                 
    };
                
    var video = controls.video[0];
               
    controls.playpause.click(function(){
        if (video.paused) {
            video.play();
            $(this).text("Pause");    
        } else {
            video.pause();
            $(this).text("Play");
        }
                
        $(this).toggleClass("paused"); 
    });
}); 