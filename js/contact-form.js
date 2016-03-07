//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

$(function() {
    $('form').submit(function() {
    	var formData = {
            'name'              : $('input[name=name]').val(),
            'email'             : $('input[name=reply_to]').val(),
            'message'    		: $('textarea[name=message]').val()
        };

        var promise = $.ajax({
            type: 'POST',
            url: 'http://formspree.io/liow.alex@gmail.com',
            data: formData,
            enc: true,
            success: function(){swal("Good job!", "You clicked the button!", "success");}
        });
    });
})

$( document ).ajaxComplete(function() {
	swal("Good job!", "You clicked the button!", "success");
});

