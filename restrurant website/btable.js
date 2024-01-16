const namee = document.getElementById('namee');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const date = document.getElementById('date');
const time = document.getElementById('time');
const partysize = document.getElementById('partysize');
const submit = document.getElementsByClassName('table-form')[0];

submit.addEventListener('submit',(e)=>{
    e.preventDefault();
    console.log('clicked');

    let ebody= `
    <b>Name:</b> ${namee.value}
    <br>
    <b>Email:</b> ${email.value}
    <br>
    <b>Phone No:</b> ${phone.value}
    <br>
    <b>Date:</b> ${date.value}
    <br>
    <b>Time:</b>${time.value}
    <br>
    <b>Party Size:</b>${partysize.value}
    <br>


    `


    Email.send({
        SecureToken : "e787eac6-b17c-4d37-b175-6471b211fc08",
        To : 'gurminderpannu6@gmail.com',
        From : "gurminderpannu6@gmail.com",
        Subject : "Table Booking"+ email.value,
        Body : ebody
    }).then(
      message => alert(message)
    );
}
)