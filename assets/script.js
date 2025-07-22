(function(){
  const petButtons = document.querySelectorAll('.pet-button[data-pet]');
  const weightInput = document.getElementById('pet-weight-input');
  const calcBtn = document.querySelector('.pet-button.pet-calc');
  const resultDiv = document.querySelector('.pet-result');
  let selectedPet = '';

  // activate selected pet button
  petButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      petButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      selectedPet = btn.dataset.pet;
    });
  });

  // handle calculate click
  if (calcBtn) {
    calcBtn.addEventListener('click', () => {
      if (!selectedPet) {
        resultDiv.textContent = 'Selecione o animal.';
        return;
      }
      const peso = weightInput.value.trim();
      if (!peso) {
        resultDiv.textContent = 'Informe o peso.';
        return;
      }

      const formData = new FormData();
      formData.append('action', 'pet_four_calculate');
      formData.append('animal', selectedPet);
      formData.append('peso', peso);

      fetch((window.petCalculator && window.petCalculator.ajax_url) || 'admin-ajax.php', {
        method: 'POST',
        body: formData
      })
        .then(resp => resp.text())
        .then(text => {
          resultDiv.textContent = text;
        })
        .catch(() => {
          resultDiv.textContent = 'Erro ao calcular.';
        });
    });
  }
})();
