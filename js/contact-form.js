//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

$(function() {
    $('form').submit(function() {
    	var formData = {
            'name'              : $('input[name=name]').val(),
            'email'             : $('input[name=email]').val(),
            'message'    		: $('input[name=message]').val()
        };

        window.alert(formData.name);

        $.ajax({
            type: 'POST',
            url: 'http://formspree.io/liow.alex@gmail.com',
            data: formData 
        });
    });
})
