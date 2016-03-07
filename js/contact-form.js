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

        window.alert(formData.email);

        $.ajax({
            type: 'POST',
            url: 'http://formspree.io/liow.alex@gmail.com',
            data: formData 
        });
    });
})
