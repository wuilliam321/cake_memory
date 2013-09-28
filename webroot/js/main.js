$( document ).ready( function() {
    $( 'textarea.editor' ).ckeditor({toolbar : [
        { name: 'document',    items : [ 'Source','-', 'Preview', '-', 'Templates' ] },
        { name: 'clipboard',   items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
        { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
        '/',
        { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
        { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
        { name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
        //'/',
        { name: 'styles',      items : [ 'Styles','Format','Font','FontSize' ] },
        { name: 'colors',      items : [ 'TextColor','BGColor' ] },
        { name: 'insert',      items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
    ]});
    
    
    /* Cuando el formulario cambia */
    var form_change = false;
    onFormChange = function () {
        form_change = true;
    }
    $("form.validate_change input, form.validate_change textarea, form.validate_change select").change(onFormChange);
    for (var i in CKEDITOR.instances) {
        CKEDITOR.instances[i].on('change', onFormChange);
    }
    
    $("form.validate_change").submit(function () {
        console.log(form_change)
        if (form_change) {
            alert("Hey! ha cambiado, esta seguro?")
        }
    })
} );