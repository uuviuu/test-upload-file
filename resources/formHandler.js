document.addEventListener('DOMContentLoaded', () => {
    // Получаем элемент select с типами
    const typeSelect = document.querySelector('select[name="type"]');

    // Функция для обновления видимости полей
    const updateFieldsVisibility = () => {
        // Получаем текущее выбранное значение
        const selectedType = typeSelect.value;

        // Все поля формы
        const allFields = document.querySelectorAll('input');

        // Проходим по всем полям формы
        allFields.forEach(field => {
            if (field.name !== 'file') {
                if (selectedType !== 'typeAll') {
                    if (field.name.includes(selectedType)) {
                        // Если имя поля содержит выбранный тип, показываем его
                        field.closest('.form-group').style.display = ''; // предполагаем, что поля обернуты в div.form-group
                    } else {
                        // Иначе скрываем
                        field.closest('.form-group').style.display = 'none';
                    }
                } else {
                    field.closest('.form-group').style.display = '';
                }
            }
        });
    };

    // Обновляем видимость полей при загрузке страницы
    updateFieldsVisibility();

    // Обновляем видимость полей при изменении значения в select
    typeSelect.addEventListener('change', updateFieldsVisibility);
});
