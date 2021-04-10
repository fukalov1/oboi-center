<template>
    <div>

    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "App",
        data() {
            return {
                coordinates: [
                    [53.525621193158074,49.30932041841794]
                ],
                contacts: [
                    {
                        name: 'г.Тольятти',
                        data: [
                            {address: 'ул. Мира, д.92а', phone: '+7 (917) 123-32-93'},
                            {address: 'ул. Свердлова, д.7г', phone: '+7 (8482) 260-999'},
                            {address: 'ул. 70 лет Октября, д.38', phone: '+7(8482) 702-550'},
                        ]
                    },
                    {
                        name: 'г.Отрадный',
                        data: [
                            {address: 'ул. Нефтяников д. 90 ТЦ «Радна плюс»', phone: '+7 (917) 131-85-85'},
                        ],
                    },
                    {
                        name: 'г.Нефтегорск',
                        data: [
                            {address: 'ул. Нефтяников, д. 41 ТЦ «Мир»', phone: '+7 (917) 812-69-773'},
                        ]
                    },
                    {
                        name: 'ПГТ Безенчук',
                        data: [
                            {address: 'ул. Мамистова д. 3 ТЦ «Универмаг»', phone: '+7 (987) 155-09-65'},
                        ]
                    },
                    {
                        name: 'г.Сызрань',
                        data: [
                            {address: 'ул. Советская д.9', phone: '+7 (917) 109-17-45'},
                        ]
                    }
                ],
                address: [],
                fio: '',
                phone: '',
                code: '',
                step: 1,
                error: ''
            }
        },
        created() {
            //     // Установить скрипты для использования яндекс карты
            //     let scriptYandexMap = document.createElement('script');
            //     scriptYandexMap.setAttribute('src', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU');
            //     document.head.appendChild(scriptYandexMap);
            //
            //     // Инициализировать яндекс карту
            //     scriptYandexMap.addEventListener("load", this.initializeYandexMap);
        },
        mounted() {
            this.address = this.contacts[0];
        },
        methods: {
            sendData() {
                let data = {fio: this.fio, phone: this.phone};
                axios.post(`/send/sendsms.php`, data)
                    .then(response => {
                        this.step = 2;
                    })
                    .catch(error => {
                        this.error = 'Что то пошло не так (ಠ_ಠ)';
                    });
            }
            // initializeYandexMap() {
            //     ymaps.ready(() => {
            //         const map = new window.ymaps.Map("map", {
            //             center: [53.55, 49.35],
            //             zoom: 12
            //         });
            //     })
            //     this.setMarkers();
            // },
            // setMarkers() {
            //     console.log('TEST',this.test,this.coordinates);
            //     for (let i = 0; i < this.coordinates.length; i++) {
            //         let placemark = new ymaps.Placemark(this.coordinates[i]);
            //         this.map.geoObjects.add(placemark);
            //     }
            // }
        }
    };
</script>
