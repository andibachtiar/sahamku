const bobotRasio = document.querySelector('#bobot-rasio');

const formBobot = bobotRasio.querySelectorAll('.form-container');

const formValue = function(form){
  const inputs = form.querySelectorAll('.form-control');
  const ArrayInputs = Array.from(inputs);

  let values = ArrayInputs.map(input => input.value)
    .map(value => parseInt(value))
    .reduce((previousValue, currentValue) => previousValue + currentValue);

  return values;
}

formBobot.forEach(form => {
  window.addEventListener('load', () => {
    let value = formValue(form)
    
    form.querySelector('.total').innerHTML = value;
  })
  
  form.addEventListener('change', () => {
    let value = formValue(form);
    
    form.querySelector('.total').innerHTML = value;
  })


  form.addEventListener('submit', event => {
    event.preventDefault();
    if(formValue(form) !== 100){
      return form.querySelector('.card').classList.add('border-danger');
    }
    if(form.querySelector('.card').classList.contains('border-danger')){
      form.querySelector('.card').classList.remove('border-danger')
    }
    const inputs = Array.from(form.querySelectorAll('.form-control'));

    // Populate data from inputs form
    const csrf = form.querySelector('.csrf');
    const data = {[csrf.name]: csrf.value };
    inputs.forEach(input => {
      return data[input.id] = parseInt(input.value);
    })
    
    const url = form.querySelector('form').action;

    // Send post data with fetch API
    fetch(url, {
      method: 'POST',
      body: JSON.stringify(data),
      headers: {
        'Content-Type': 'application/json',
        "X-Requested-With": "XMLHttpRequest"
      },
    })
    .then(response => response.json())
    .then(text => {
      alert(text.message);
    })
    .catch(error => console.log('Error: ' + error));
  })
})

// function changeTotal(html){
  //   html.addEventListener('change', function(){
  //     let data = Array.from(this.querySelectorAll('.form-control'));
  //     let totalBobot = data.map(data => parseInt(data.value)).reduce((prevData, currData) => prevData + currData);
  
  //     let printTotal = html.querySelector('.total');
  //     if(isNaN(totalBobot)){
  //       return printTotal.innerHTML = `<strong class="text-danger">total bobot tidak valid</strong>`;
  //     }
  //     if(totalBobot > 100 || totalBobot < 100){
  //       return printTotal.innerHTML = `<strong class="text-danger">${totalBobot}%</strong>`;
  //     }else if(totalBobot === 100)
  //     return printTotal.innerHTML = `<strong class="text-success">${totalBobot}% </strong>`;
  //   })
  // }



















// Event for both of Bobot forms
// formBobot.forEach(element => {

//   window.addEventListener('load', function(){
//     printTotalBobot(element);
//   })




  // element.addEventListener('click', function(event){
  //   event.preventDefault();
  // })
// });


// const bobotPerbankan = document.querySelector('.form-perbankan');
// const bobotNonPerbankan = document.querySelector('.form-non-perbankan');

// function total(html){
//   const input = Array.from(html.querySelectorAll('.form-control'));
//   let value = input.map(input => parseInt(input.value)).reduce((prevNumber, currNumber) => prevNumber + currNumber);

//   let total = html.querySelector('.total');
//   total.innerHTML = `<strong class="text-success">${value}% </strong>`;
// }

// window.addEventListener('load', function(){
//   total(bobotPerbankan);
//   total(bobotNonPerbankan);
// })

// function changeTotal(html){
//   html.addEventListener('change', function(){
//     let data = Array.from(this.querySelectorAll('.form-control'));
//     let totalBobot = data.map(data => parseInt(data.value)).reduce((prevData, currData) => prevData + currData);

//     let printTotal = html.querySelector('.total');
//     if(isNaN(totalBobot)){
//       return printTotal.innerHTML = `<strong class="text-danger">total bobot tidak valid</strong>`;
//     }
//     if(totalBobot > 100 || totalBobot < 100){
//       return printTotal.innerHTML = `<strong class="text-danger">${totalBobot}%</strong>`;
//     }else if(totalBobot === 100)
//     return printTotal.innerHTML = `<strong class="text-success">${totalBobot}% </strong>`;
//   })
// }
// changeTotal(bobotPerbankan);
// changeTotal(bobotNonPerbankan);

// const formPerbankan = document.querySelector('#formPerbankan');

// formPerbankan.addEventListener('submit', function(event){
//   event.preventDefault();
// })