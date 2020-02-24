$("a.delete").on("click", function(e) {
    e.preventDefault();

    if (confirm("Are you sure?")) {
        // alert('delete the article');

        var frm = $("<form>");
        frm.attr('method', 'post');
        frm.attr('action', $(this).attr('href'));
        frm.appendTo("body");
        frm.submit();

    }
});

$.validator.addMethod("dateTime", function(value, element) {
    return (value == "") || !isNaN(Date.parse(value));
}, "Must be a valid date and time");

/**
 * Validate the article form
 */
$("#formArticle").validate({
    rules: {
        title: {
            required: true
        },
        content: {
            required: true
        },
        published_at: {
            dateTime: true
        }
    }
});

/**
 * Handle the publish button for publishing articles
 */
$("button.publish").on("click", function(e) {

    var id = $(this).data('id');
    var button = $(this);

    $.ajax({
        url: '/admin/publish-article.php',
        type: 'POST',
        data: {id: id}
    })
    .done(function(data) {
        button.parent().html(data);
    });

});

/**
 * Show the date and time picker for the published at field
 */
$('#published_at').datetimepicker({
    format: 'Y-m-d H:i:s'
});

/**
 * Validate the contact form
 */
$("#formContact").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        subject: {
            required: true
        },
        message: {
            required: true
        }
    }
});