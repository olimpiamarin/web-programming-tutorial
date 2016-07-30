console.debug('1) loading agenda');

//json
function getRow(person) {

    var row = '<tr>' +
        '<td>' + person.firstName + '</td>' +
        '<td>' + person.lastName + '</td>' +
        '<td>' + person.telefon + '</td>' +
        '<td>' +
            //'<button class="edit" data-id="' + person.id + '">edit</button></td>' +
            '<button class="remove" data-id="' + person.id + '">x</button></td>' +
        '</tr>';

    return row;
}

//primeste un json, aici se incarca agenda, ajax = functie
$.ajax({
    url: "js/mocks/load-contacts.json",
    dataType: 'json',
    cache:false
    //punem buton de delete
}).done(function (result) {
    console.debug('3) ajax done', result);
    showContacts(result);
});

//functie de stergere
function removeContact(id) {
    $.ajax({
        url: "js/mocks/remove-contact.json",
        type: 'POST',
        data: {
            id: id
        }
        //punem buton de delete
    }).done(function (result) {
        showContacts(result);
    });
}

console.debug('2) after ajax');

//afisam contactele
function showContacts(contacts) {
    //punem o functie sa stearga datele inainte sa le repuna actualizate
    $('#agenda tbody').html('');
    for (var i = 0; i < contacts.length; i++) {
        var person = contacts[i];
        $('#agenda tbody').append(getRow(person));
    }

}


//stergere id facem jsonul pt sergere - metoda imbunatatita
$('#agenda').on('click', 'button.remove', function () {
    var id = $(this).data('id');
    console.info('remove this contact', this, id);
    removeContact(id);
});


//TEMA --->
//function editContacts(id){
//    $("[name='Nume']").val



////adaugam buton edit + add
//$('#agenda').on('click', 'button.edit', function () {
//    var id = $(this).data('id');
//    console.info('edit this contact', this, id);
//    removeContact(id);
//});