const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})

$(document).ready(function() {
$('#ModalForm').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});