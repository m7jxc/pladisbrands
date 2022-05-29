ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [43.201625213626265,76.65598416137694],
            zoom: 16
			
        }),
		
        myPlacemark = new ymaps.Placemark([43.201625213626265,76.65598416137694], {
            // Свойства.
            hintContent: ''
        }, {
            // Опции.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/wp-content/uploads/2020/04/pin.png',
			
            // Размеры метки.
            iconImageSize: [58, 48],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [0, -48]
        });

    // Добавляем все метки на карту.
    myMap.geoObjects.add(myPlacemark),
	myMap.behaviors.disable('scrollZoom');
}