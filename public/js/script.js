const bobotPerbankan = document.querySelector('.form-perbankan');
const bobotNonPerbankan = document.querySelector('.form-non-perbankan');

function total(html){
  const input = Array.from(html.querySelectorAll('.form-control'));
  let value = input.map(input => parseInt(input.value)).reduce((prevNumber, currNumber) => prevNumber + currNumber);

  let total = html.querySelector('.total');
  total.innerHTML = `<strong class="text-success">${value}% </strong>`;
}

window.addEventListener('load', function(){
  total(bobotPerbankan);
  total(bobotNonPerbankan);
})

function changeTotal(html){
  html.addEventListener('change', function(){
    let data = Array.from(this.querySelectorAll('.form-control'));
    let totalBobot = data.map(data => parseInt(data.value)).reduce((prevData, currData) => prevData + currData);

    let printTotal = html.querySelector('.total');
    if(isNaN(totalBobot)){
      return printTotal.innerHTML = `<strong class="text-danger">total bobot tidak valid</strong>`;
    }
    if(totalBobot > 100 || totalBobot < 100){
      return printTotal.innerHTML = `<strong class="text-danger">${totalBobot}%</strong>`;
    }else if(totalBobot === 100)
    return printTotal.innerHTML = `<strong class="text-success">${totalBobot}% </strong>`;
  })
}
changeTotal(bobotPerbankan);
changeTotal(bobotNonPerbankan);