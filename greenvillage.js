// var txtName = document.getElementById("txtName");
// var txtprenom = document.getElementById("txtprenom");
// var txtrue = document.getElementById("txtrue");
// var txtville = document.getElementById("txtville");
// var txtEmail = document.getElementById("txtEmail");
// var txtPhone = document.getElementById("txtPhone");

// var misstxtName = document.getElementById("misstxtName");
// var misstxtprenom = document.getElementById("misstxtprenom");
// var misstxtrue = document.getElementById("misstxtrue");
// var misstxtville = document.getElementById("misstxtville");
// var misstxtEmail = document.getElementById("misstxtEmail");
// var misstxtPhone = document.getElementById("misstxtPhone");

// var textNamevalid = /^[a-zA-Z-éèàçùëüïôäâêûîô#&]+$/;
// var textEmailvalid = /[\w._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/;
// var textPhonevalid = /^0[\d]([-. ]?[0-9]{2}){4}$/;
// var textVillevalid = /^[\w\-\déèàçùëüïôäâêûîô#& ]+$/;


// txtName.onblur = txtNameCheck;
// txtprenom.onblur = txtprenomCheck;
// txtrue.onblur = txtrueCheck;
// txtville.onblur = txtvilleCheck;
// txtEmail.onblur = txtEmailCheck;
// txtPhone.onblur = txtPhoneCheck;
// submit.onclick = checkForm;


// function txtNameCheck() {
//     if (txtName.validity.valueMissing) {
//         event.preventDefault()
//         misstxtName.textContent = "Champ non renseigné";
//         txtName.className("uk-form-danger");
//     } else if (textNamevalid.test(txtName.value) == false) {
//         event.preventDefault();
//         misstxtName.textContent = "format incorrect";
//     } else {
//         misstxtName.textContent = "ok";
//     }
// };

// function txtprenomCheck() {
//     if (txtprenom.validity.valueMissing) {
//         event.preventDefault()
//         misstxtprenom.textContent = "Champ non renseigné";
//         txtprenom.className("uk-form-danger");
//     } else if (textNamevalid.test(txtprenom.value) == false) {
//         event.preventDefault();
//         misstxtprenom.textContent = "format incorrect";
//     } else {
//         misstxtprenom.textContent = "ok";
//     }
// };

// function txtrueCheck() {
//     if (txtrue.validity.valueMissing) {
//         event.preventDefault()
//         misstxtrue.textContent = "Champ non renseigné";
//         txtrue.className("uk-form-danger");
//     } else if (textVillevalid.test(txtrue.value) == false) {
//         event.preventDefault();
//         misstxtrue.textContent = "format incorrect";
//     } else {
//         misstxtrue.textContent = "ok";
//     }
// };

// function txtvilleCheck() {
//     if (txtville.validity.valueMissing) {
//         event.preventDefault()
//         misstxtville.textContent = "Champ non renseigné";
//         txtville.className("uk-form-danger");
//     } else if (textVillevalid.test(txtville.value) == false) {
//         event.preventDefault();
//         misstxtville.textContent = "format incorrect";
//     } else {
//         misstxtville.textContent = "ok";
//     }
// };

// function txtEmailCheck() {
//     if (txtEmail.validity.valueMissing) {
//         event.preventDefault()
//         misstxtEmail.textContent = "Champ non renseigné";
//         txtEmail.className("uk-form-danger");
//     } else if (textEmailvalid.test(txtEmail.value) == false) {
//         event.preventDefault();
//         misstxtEmail.textContent = "format incorrect";
//     } else {
//         misstxtEmail.textContent = "ok";
//     }
// };

// function txtPhoneCheck() {
//     if (txtPhone.validity.valueMissing) {
//         event.preventDefault()
//         misstxtPhone.textContent = "Champ non renseigné";
//         txtPhone.className("uk-form-danger");
//     } else if (textPhonevalid.test(txtPhone.value) == false) {
//         event.preventDefault();
//         misstxtPhone.textContent = "format incorrect";
//     } else {
//         misstxtPhone.textContent = "ok";
//     }
// };


// function checkForm() {
//     if (txtName.validity.valueMissing) {
//         event.preventDefault()
//         misstxtName.textContent = 'Champ non renseigné';
//         misstxtName.style.color = 'red';
//     } else if (textNamevalid.test(txtName.value) == false) {
//         event.preventDefault();
//         misstxtName.textContent = 'Format incorrect';
//         misstxtName.style.color = 'red';
//     } else {
//         misstxtName.textContent = 'Ok';
//         misstxtName.style.color = 'green';
//     }

//     if (txtprenom.validity.valueMissing) {
//         event.preventDefault()
//         misstxtprenom.textContent = 'Champ non renseigné';
//         misstxtprenom.style.color = 'red';
//     } else if (textNamevalid.test(txtprenom.value) == false) {
//         event.preventDefault();
//         misstxtprenom.textContent = 'Format incorrect';
//         misstxtprenom.style.color = 'red';
//     } else {
//         misstxtprenom.textContent = 'Ok';
//         misstxtprenom.style.color = 'green';
//     }

//     if (txtrue.validity.valueMissing) {
//         event.preventDefault()
//         misstxtrue.textContent = 'Champ non renseigné';
//         misstxtrue.style.color = 'red';
//     } else if (textVillevalid.test(txtrue.value) == false) {
//         event.preventDefault();
//         misstxtrue.textContent = 'Format incorrect';
//         misstxtrue.style.color = 'red';
//     } else {
//         misstxtrue.textContent = 'Ok';
//         misstxtrue.style.color = 'green';
//     }

//     if (txtville.validity.valueMissing) {
//         event.preventDefault()
//         misstxtville.textContent = 'Champ non renseigné';
//         misstxtville.style.color = 'red';
//     } else if (textVillevalid.test(txtville.value) == false) {
//         event.preventDefault();
//         misstxtville.textContent = 'Format incorrect';
//         misstxtville.style.color = 'red';
//     } else {
//         misstxtville.textContent = 'Ok';
//         misstxtville.style.color = 'green';
//     }

//     if (txtEmail.validity.valueMissing) {
//         event.preventDefault()
//         misstxtEmail.textContent = 'Champ non renseigné';
//         misstxtEmail.style.color = 'red';
//     } else if (textEmailvalid.test(txtEmail.value) == false) {
//         event.preventDefault();
//         misstxtEmail.textContent = 'Format incorrect';
//         misstxtEmail.style.color = 'red';
//     } else {
//         misstxtEmail.textContent = 'Ok';
//         misstxtEmail.style.color = 'green';
//     }

//     if (txtPhone.validity.valueMissing) {
//         event.preventDefault()
//         misstxtPhone.textContent = 'Champ non renseigné';
//         misstxtPhone.style.color = 'red';
//     } else if (textPhonevalid.test(txtPhone.value) == false) {
//         event.preventDefault();
//         misstxtPhone.textContent = 'Format incorrect';
//         misstxtPhone.style.color = 'red';
//     } else {
//         misstxtPhone.textContent = 'Ok';
//         misstxtPhone.style.color = 'green';
//     }
// }

