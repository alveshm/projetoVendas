$(document).ready(function() {
    var count = 0;
    $('.button-add').click(function () {
        var inputCopy = $('.input-copy.hidden').clone();
        inputCopy.html(inputCopy.html().replace(new RegExp('__COUNT__', 'g'), count));
        inputCopy.removeClass('hidden');
        inputCopy.find('input, select').attr('disabled', false)
        inputCopy.insertBefore('#button-salvar');
        count++;
    });
    $('.button-remove').click(function () {
        $('.input-copy:not(.hidden)').last().remove();
    });
});