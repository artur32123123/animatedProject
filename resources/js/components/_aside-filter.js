document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('filter-form');
    const lowerSlider = document.getElementById('lower');
    const upperSlider = document.getElementById('upper');
    const minPriceSpan = document.getElementById('min-price');
    const maxPriceSpan = document.getElementById('max-price');
    const hiddenMinPrice = document.getElementById('hidden-min-price');
    const hiddenMaxPrice = document.getElementById('hidden-max-price');
    const clearBtn = document.querySelector('.clear-btn');

    // Обновление отображаемых цен
    function updatePriceDisplay() {
        minPriceSpan.textContent = parseInt(lowerSlider.value).toLocaleString('ru-RU') + ' ₽';
        maxPriceSpan.textContent = parseInt(upperSlider.value).toLocaleString('ru-RU') + ' ₽';
        hiddenMinPrice.value = lowerSlider.value;
        hiddenMaxPrice.value = upperSlider.value;
    }

    // Инициализация значений
    updatePriceDisplay();

    // Обработчики для слайдеров
    [lowerSlider, upperSlider].forEach(slider => {
        slider.addEventListener('input', function() {
            // Корректировка значений при пересечении
            if (parseInt(lowerSlider.value) > parseInt(upperSlider.value)) {
                if (this === lowerSlider) {
                    upperSlider.value = lowerSlider.value;
                } else {
                    lowerSlider.value = upperSlider.value;
                }
            }
            updatePriceDisplay();
        });
    });

    // Сброс фильтров
    clearBtn.addEventListener('click', function() {
        // Сбрасываем значения формы
        form.reset();

        // Вручную сбрасываем слайдеры
        lowerSlider.value = 500;
        upperSlider.value = 25000;
        updatePriceDisplay();

        // Сбрасываем скрытые поля
        hiddenMinPrice.value = 500;
        hiddenMaxPrice.value = 25000;

        // Отправляем форму
        form.submit();
    });
});
