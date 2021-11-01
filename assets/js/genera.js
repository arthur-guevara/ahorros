function generateNumber() {
    let number = Math.floor((Math.random() * (94 - 0 + 1)) + 0);
    console.log(number);
    $('#result').text(number);
    $('#btn-add').show();
   

}
function addMoney() {
     Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    });
}
