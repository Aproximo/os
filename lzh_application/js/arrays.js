function arrays(arrayName){ /* масиви районів для відображення в селекті*/
	var arrays = {
		crimea: ['Ялта',
'Алушта',
'Джанкойський',
'Нижньогірський',
'Красногвардійський',
'Совєтський',
'Кіровський',
'Судак',
'Феодосія',
'Сакський',
'Євпаторія',
'Керч',
'Ленінський',
'Білогірський',
'Первомайський',
'Красноперекопський',
'Чорноморський',
'Роздольненський',
'Сімферополь',
'Сімферопольський',
'Бахчисарайський'],

	vinnitsa: ['Хмільницький',
'Тиврівський',
'Жмеринський',
'Немирівський',
'Вінницький',
'Барський',
'Мурованокуриловецький',
'Погребищенський',
'Козятинський',
'Літинський',
'Томашпільський',
'Чечельницький',
'Шаргородський',
'Гайсинський',
'Тростянецький',
'Калинівський',
'Піщанський',
'Крижопільський',
'Теплицький',
'Липовецький',
'Оратівський',
'Могилів-Подільський',
'Чернівецький',
'Тульчинський',
'Ямпільський',
'Бершадський',
'Іллінецький',
'Козятин'],

	volyn: ['Маневицький',
'Любомльський',
'Камінь-Каширський',
'Любешівський',
'Ратнівський',
'Горохівський',
'Локачинський',
'Луцький',
'Рожищенський',
'Ківерцівський',
'Ковельський',
'Турійський',
'Старовижівський',
'Володимир-Волинський',
'Іваничівський',
'Шацький',
'Нововолинськ'],

	dnipropetrovsk: ['Царичанський',
'Солонянський',
'Криворізький',
'Петриківський',
'Магдалинівський',
'Дніпродзержинськ',
'Нікопольський',
'Криничанський',
'Павлоградський',
'Дніпропетровський',
'Новомосковський',
'Васильківський',
'Покровський',
'Синельниківський',
'Межівський',
'Петропавлівський',
'Юр\'ївський',
'Першотравенськ',
'Тернівка',
'Апостолівський',
'Марганець',
'Орджонікідзе',
'Томаківський',
'Кривий Ріг',
'Верхньодніпровський',
'П\'ятихатський',
'Вільногірськ',
'Жовті Води',
'Широківський',
'Софіївський',],

	donetsk: ['Амвросіївський',
'Донецьк',
'Старобешівський',
'Шахтарський',
'Торез',
'Ясинуватський',
'Тельманівський',
'Горлівка',
'Макіївка',
'Дзержинськ',
'Докучаєвськ',
'Жданівка',
'Кіровське',
'Єнакієве',
'Харцизьк',
'Новоазовський',
'Сніжне',
'Волноваський',
'Артемівський',
'Маріуполь',
'Красноармійський',
'Димитров',
'Селидове',
'Добропільський',
'Першотравневий',
'Володарський',
'Слов\'янський',
'Краснолиманський',
'Краматорськ',
'Дружківка',
'Костянтинівський',
'Мар\'їнський',
'Великоновосілківський',
'Дебальцеве',
'Авдіївка',
'Вугледар',
'Олександрівський',
'Новогродівка'],

	zhytomyr: ['Андрушівський',
'Бердичівський',
'Володарсько - Волинський',
'Коростишівський',
'Попільнянський',
'Радомишльський',
'Ружинський',
'Чуднівський',
'Житомирський',
'Романівський',
'Любарський',
'Лугинський',
'Коростенський',
'Олевський',
'Малинський',
'Народицький',
'Овруцький',
'Новоград-Волинський',
'Баранівський',
'Ємільчинський',
'Червоноармійський',
'Черняхівський',
'Брусилівський'],

	transcarpathian: ['Мукачівський',
'Рахівський',
'Воловецький',
'Берегівський',
'Міжгірський',
'Хустський',
'Тячівський',
'Виноградівський',
'Іршавський',
'Свалявський',
'Великоберезнянський',
'Перечинський',
'Ужгородський',
'Чоп'],

	zaporozhye: ['Пологівський',
'Гуляйпільський',
'Василівський',
'Запорізький',
'Вільнянський',
'Бердянський',
'Енергодар',
'Розівський',
'Оріхівський',
'Куйбишевський',
'Кам\'янсько-Дніпровський',
'Великобілозерський',
'Михайлівський',
'Приморський',
'Приазовський',
'Мелітопольський',
'Веселівський',
'Якимівський',
'Токмацький',
'Чернігівський',
'Новомиколаївський'],

	ivanoFrankivsk: ['Галицький',
'Рогатинський',
'Коломийський',
'Снятинський',
'Городенківський',
'Тисменицький',
'Тлумацький',
'Болехів',
'Рожнятівський',
'Надвірнянський',
'Богородчанський',
'Косівський',
'Верховинський',
'Яремче',
'Івано-Франківськ',
'Долинський',
'Калуський',
'Якимівський',
'Токмацький',
'Чернігівський',
'Новомиколаївський'],

	kyiv: ['Білоцерківський',
'Згурівський',
'Яготинський',
'Переяслав-Хмельницький',
'Іванківський',
'Поліський',
'Фастівський',
'Рокитнянський',
'Сквирський',
'Таращанський',
'Ставищенський',
'Києво-Святошинський',
'Макарівський',
'Вишгородський',
'Бородянський',
'Ірпінь',
'Тетіївський',
'Буча',
'Володарський',
'Кагарлицький',
'Броварський',
'Ржищів',
'Обухівський',
'Бориспільський',
'Баришівський',
'Васильківський',
'Славутич',
'Березань',
'Богуславський',
'Миронівський'],

	Kirovograd: ['Ульяновський',
'Олександрійський',
'Петрівський',
'Світловодський',
'Онуфріївський',
'Компаніївський',
'Устинівський',
'Бобринецький',
'Новгородківський',
'Гайворонський',
'Добровеличківський',
'Долинський',
'Знам\'янський',
'Новоархангельський',
'Олександрівський',
'Кіровоградський',
'Новоукраїнський',
'Голованівський',
'Вільшанський',
'Маловисківський',
'Новомиргородський',
'Кіровоград'],

	lugansk: ['Ровеньки',
'Біловодський',
'Марківський',
'Міловський',
'Антрацитівський',
'Красний Луч',
'Стаханов',
'Брянка',
'Алчевськ',
'Краснодонський',
'Свердловський',
'Новоайдарський',
'Кіровськ',
'Первомайськ',
'Новопсковський',
'Старобільський',
'Перевальський',
'Сватівський',
'Слов\'яносербський',
'Попаснянський',
'Лутугинський',
'Луганськ',
'Троїцький',
'Білокуракинський',
'Станично-Луганський',
'Сєверодонецьк',
'Кремінський',
'Лисичанськ',
'Кремінна',
'Рубіжне'],

	lviv: ['Буський',
'Перемишлянський',
'Яворівський',
'Мостиський',
'Городоцький',
'Золочівський',
'Жовківський',
'Кам\'янка-Бузький',
'Пустомитівський',
'Борислав',
'Жидачівський',
'Миколаївський',
'Бродівський',
'Дрогобицький',
'Сколівський',
'Стрийський',
'Самбірський',
'Старосамбірський',
'Турківський',
'Трускавець',
'Львів',
'Червоноград',
'Сокальський',
'Радехівський'],

	nikolaev: ['Веселинівський',
'Вознесенський',
'Доманівський',
'Єланецький',
'Арбузинський',
'Братський',
'Врадіївський',
'Кривоозерський',
'Первомайський',
'Казанківський',
'Новобузький',
'Березнегуватський',
'Березанський',
'Жовтневий',
'Миколаївський',
'Новоодеський',
'Очаківський',
'Снігурівський',
'Баштанський',
'Южноукраїнськ'],

	odessa: ['Березівський',
'Болградський',
'Біляївський',
'Великомихайлівський',
'Іванівський',
'Комінтернівський',
'Овідіопольський',
'Роздільнянський',
'Кілійський',
'Ренійський',
'Ізмаїльський',
'Кодимський',
'Котовський',
'Красноокнянський',
'Тарутинський',
'Іллічівськ',
'Арцизький',
'Саратський',
'Ананьївський',
'Любашівський',
'Савранський',
'Миколаївський',
'Ширяївський',
'Татарбунарський',
'Білгород-Дністровський',
'Балтський',
'Фрунзівський',
'Теплодар'],

	poltava: ['Пирятинський',
'Кобеляцький',
'Решетилівський',
'Зіньківський',
'Машівський',
'Семенівський',
'Диканський',
'Гадяцький',
'Полтавський',
'Новосанжарський',
'Карлівський',
'Лубенський',
'Хорольський',
'Оржицький',
'Лохвицький',
'Чутівський',
'Великобагачанський',
'Шишацький',
'Миргородський',
'Глобинський',
'Гребінківський',
'Чорнухинський',
'Кременчуцький',
'Комсомольський',
'Козельщинський',
'Котелевський'],

	rivne: ['Радивилівський',
'Зарічненський',
'Березнівський',
'Дубровицький',
'Сарненський',
'Рівненський',
'Корецький',
'Гощанський',
'Дубенський',
'Млинівський',
'Демидівський',
'Володимирецький',
'Острозький',
'Рокитнівський',
'Здолбунівський',
'Костопільський',
'Кузнецовськ'],

	sumy: ['Лебединський',
'Недригайлівський',
'Роменський',
'Білопільський',
'Великописарівський',
'Липоводолинський',
'Охтирський',
'Тростянецький',
'Сумський',
'Краснопільський',
'Середино-Будський',
'Шосткинський',
'Конотопський',
'Кролевецький',
'Ямпільський',
'Путивльський',
'Глухівський',
'Буринський'],

	ternopil: ['Збаразький',
'Бучацький',
'Монастириський',
'Зборівський',
'Підволочиський',
'Тернопільський',
'Кременецький',
'Бережанський',
'Шумський',
'Борщівський',
'Чортківський',
'Гусятинський',
'Теребовлянський',
'Підгаєцький',
'Заліщицький',
'Лановецький',
'Козівський'],

	kharkiv: ['Красноградський',
'Лозівський',
'Богодухівський',
'Близнюківський',
'Дергачівський',
'Золочівський',
'Краснокутський',
'Первомайський',
'Сахновщинський',
'Зачепилівський',
'Кегичівський',
'Балаклійський',
'Барвінківський',
'Борівський',
'Ізюмський',
'Нововодолазький',
'Куп\'янський',
'Шевченківський',
'Валківський',
'Вовчанський',
'Зміївський',
'Коломацький',
'Печенізький',
'Харківський',
'Чугуївський',
'Великобурлуцький',
'Дворічанський'],

	kherson: ['Цюрупинський',
'Каланчацький',
'Білозерський',
'Голопристанський',
'Каховський',
'Бериславський',
'Горностаївський',
'Нова Каховка',
'Генічеський',
'Новотроїцький',
'Іванівський',
'Великоолександрівський',
'Високопільський',
'Скадовський',
'Верхньорогачицький',
'Чаплинський',
'Нововоронцовський',
'Нижньосірогозький',
'Великолепетиський',
'Херсон'],

	khmelnitsky: ['Хмельницький',
'Білогірський',
'Дунаєвецький',
'Волочиський',
'Деражнянський',
'Новоушицький',
'Шепетівський',
'Летичівський',
'Кам\'янець-Подільський',
'Чемеровецький',
'Полонський',
'Старосинявський',
'Віньковецький',
'Ярмолинецький',
'Старокостянтинівський',
'Теофіпольський',
'Славутський',
'Красилівський',
'Городоцький',
'Ізяславський',
'Нетішин'], 

	cherkassy: ['Шполянський',
'Тальнівський',
'Жашківський',
'Монастирищенський',
'Кам\'янський',
'Черкаський',
'Чигиринський',
'Канівський',
'Драбівський',
'Золотоніський',
'Чорнобаївський',
'Звенигородський',
'Катеринопільський',
'Лисянський',
'Маньківський',
'Смілянський',
'Корсунь-Шевченківський',
'Городищенський',
'Христинівський',
'Уманський'],

	chernivtsi: ['Вижницький',
'Глибоцький',
'Путильський',
'Герцаївський',
'Заставнівський',
'Сторожинецький',
'Кіцманський',
'Новоселицький',
'Сокирянський',
'Хотинський',
'Кельменецький'],

	chernihiv: ['Новгород-Сіверський',
'Корюківський',
'Щорський',
'Семенівський',
'Бахмацький',
'Чернігівський',
'Коропський',
'Срібнянський',
'Ічнянський',
'Куликівський',
'Носівський',
'Борзнянський',
'Варвинський',
'Талалаївський',
'Прилуцький',
'Бобровицький',
'Ніжинський',
'Сосницький',
'Менський',
'Ріпкинський',
'Козелецький',
'Городнянський']
 };

 return arrays[arrayName];
}