<?php include '../include/head.php'; ?>
<title>JavaScript. Начало. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='JavaScript уроки для начинающих, школьников и студентов. Бесплатные курсы онлайн. Примеры кода. <?php include '../include/description_jslearn.php'; ?>'>
<link rel='stylesheet' href='../styles/bigbtn.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
    <h1>JavaScript <span class='color_h1'>Современный Учебник</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='intro.php'>Next &#10095;</a>
    </div>

    <div class='w3-panel w3-info intro'>
        <p>Перед вами <strong>современный учебник по JavaScript</strong>, начиная с основ, включающий в себя много тонкостей и фишек JavaScript/DOM.</p>
    </div>
    <hr>

    <h2>Содержание учебника</h2>
    <p>Первые две части посвящены <strong>JavaScript</strong> и его использованию в браузере. Затем идут дополнительные циклы статей на разные темы.</p>
    <hr>

    <div class='w3-panel w3-note'>
        <h3>Перед изучением языка JavaScript необходимо знать:</h3>
        <ul>
            <li><a href="../html/index.php" title="Учебник по HTML"><strong>Основы HTML</strong></a></li>
            <li><a href="../css/index.php" title="Учебник по CSS"><strong>Основы CSS</strong></a></li>
        </ul>
    </div>
    <p>Основы HTML и CSS вы можете изучить на нашем сайте <?php include '../include/w3schools.php'; ?>, перейдя в соответствующие разделы по ссылкам.</p>
    <hr>

    <h2>Часть 1. Язык программирования JavaScript</h2>
    <p>Здесь вы можете изучить JavaScript, начиная с нуля и заканчивая продвинутыми концепциями вроде ООП.</p>
    <p>Мы сосредоточимся на самом языке, изредка добавляя заметки о средах его исполнения.</p>

    <div class='refcont'>
        <a class='bigbtn' href='intro.php'>Введение в JavaScript</a>
        <a class='bigbtn' href='manuals_specifications.php'>Справочники</a>
        <a class='bigbtn' href='code_editors.php'>Редакторы кода</a>
        <a class='bigbtn' href='devtools.php'>Консоль разработчика</a>
        <a class='bigbtn' href='hello_world.php'>Привет, Мир!</a>
        <a class='bigbtn' href='structure.php'>Структура кода</a>
        <a class='bigbtn' href='strict_mode.php'>Строгий режим</a>
        <a class='bigbtn' href='variables.php'>Переменные</a>
        <a class='bigbtn' href='types.php'>Типы данных</a>
        <a class='bigbtn' href='alert_prompt_confirm.php'>Alert. Prompt. Confirm</a>
        <a class='bigbtn' href='type_conversions.php'>Преобразование типов</a>
        <a class='bigbtn' href='operators.php'>Базовые Операторы</a>
        <a class='bigbtn' href='comparison.php'>Операторы сравнения</a>
        <a class='bigbtn' href='ifelse.php'>If... Else</a>
        <a class='bigbtn' href='logical_operators.php'>Логические операторы</a>
        <a class='bigbtn' href='nullish_coalescing_operator.php'>Оператор объединения</a>
        <a class='bigbtn' href='while_for.php'>Циклы While и For</a>
        <a class='bigbtn' href='switch.php'>Switch</a>
        <a class='bigbtn' href='function_basics.php'>Базовые функции</a>
        <a class='bigbtn' href='function_expressions.php'>Функции-выражения</a>
        <a class='bigbtn' href='arrow_functions_basics.php'>Функции-стрелки</a>
        <a class='bigbtn' href='javascript_specials.php'>Особенности JavaScript</a>
        <a class='bigbtn' href='debugging_chrome.php'>Дебаггинг в Chrome</a>
        <a class='bigbtn' href='coding_style.php'>Стиль кода</a>
        <a class='bigbtn' href='comments.php'>Комментарии</a>
        <a class='bigbtn' href='ninja_code.php'>Ниндзя-код</a>
        <a class='bigbtn' href='testing_mocha.php'>Тестирование с Mocha</a>
        <a class='bigbtn' href='polyfills.php'>Полифилы</a>
        <a class='bigbtn' href='object.php'>Объекты</a>
        <a class='bigbtn' href='object_copy.php'>Копирование объектов</a>
        <a class='bigbtn' href='garbage_collection.php'>Уборка мусора</a>
        <a class='bigbtn' href='object_methods.php'>Методы объекта</a>
        <a class='bigbtn' href='constructor_new.php'>Конструктор, New</a>
        <a class='bigbtn' href='optional_chaining.php'>Опциональная цепочка</a>
        <a class='bigbtn' href='symbol.php'>Тип данных Symbol</a>
        <a class='bigbtn' href='object_toprimitive.php'>Преобразование объектов</a>
        <a class='bigbtn' href='primitives_methods.php'>Методы примитивов</a>
        <a class='bigbtn' href='number.php'>Числа</a>
        <a class='bigbtn' href='string.php'>Строки</a>
        <a class='bigbtn' href='array.php'>Массивы</a>
        <a class='bigbtn' href='array_methods.php'>Методы массивов</a>
        <a class='bigbtn' href='iterable.php'>Перебираемые объекты</a>
        <a class='bigbtn' href='map_set.php'>Map и Set</a>
        <a class='bigbtn' href='weakmap_weakset.php'>WeakMap и WeakSet</a>
        <a class='bigbtn' href='keys-values_entries.php'>Object.keys, values, entries</a>
        <a class='bigbtn' href='destructuring_assignment.php'>Деструктурирующее присваивание</a>
        <a class='bigbtn' href='date.php'>Дата и время</a>
        <a class='bigbtn' href='json.php'>Формат JSON</a>
        <a class='bigbtn' href='recursion.php'>Рекурсия и стек</a>
        <a class='bigbtn' href='rest_parameters_spread_operator.php'>Остаточные параметры и оператор расширения</a>
        <a class='bigbtn' href='closure.php'>Замыкание</a>
        <a class='bigbtn' href='var.php'>Ключевое слово var</a>
        <a class='bigbtn' href='global_object.php'>Глобальный объект</a>
        <a class='bigbtn' href='function_object.php'>Объект функции, NFE</a>
        <a class='bigbtn' href='new_function.php'>Синтаксис &quot;new Function&quot;</a>
        <a class='bigbtn' href='settimeout_setinterval.php'>Планирование: setTimeout и setInterval</a>
        <a class='bigbtn' href='call_apply_decorators.php'>Декораторы и переадресация вызова, call/apply</a>
        <a class='bigbtn' href='bind.php'>Привязка контекста к функции</a>
        <a class='bigbtn' href='arrow_functions.php'>Повторяем стрелочные функции</a>
        <a class='bigbtn' href='property_descriptors.php'>Флаги и дескрипторы свойств</a>
        <a class='bigbtn' href='property_accessors.php'>Свойства - геттеры и сеттеры</a>
        <a class='bigbtn' href='prototype_inheritance.php'>Прототипное наследование</a>
        <a class='bigbtn' href='function_prototype.php'>F.prototype</a>
        <a class='bigbtn' href='native_prototypes.php'>Встроенные прототипы</a>
        <a class='bigbtn' href='prototype_methods.php'>Методы прототипов</a>
        <a class='bigbtn' href='class.php'>Класс: базовый синтаксис</a>
        <a class='bigbtn' href='class_inheritance.php'>Наследование классов</a>
        <a class='bigbtn' href='static_properties_methods.php'>Статические свойства и методы</a>
        <a class='bigbtn' href='private_protected_properties_methods.php'>Приватные и защищённые методы и свойства</a>
        <a class='bigbtn' href='extend_natives.php'>Расширение встроенных классов</a>
        <a class='bigbtn' href='instanceof.php'>Проверка класса: &quot;instanceof&quot;</a>
        <a class='bigbtn' href='mixins.php'>Примеси</a>
        <a class='bigbtn' href='try_catch.php'>Обработка ошибок, &quot;try..catch&quot;</a>
        <a class='bigbtn' href='custom_errors.php'>Пользовательские ошибки</a>
        <a class='bigbtn' href='callbacks.php'>Введение: кэлбэки</a>
        <a class='bigbtn' href='promise_basics.php'>Промисы</a>
        <a class='bigbtn' href='promise_chaining.php'>Цепочка промисов</a>
        <a class='bigbtn' href='promise_error_handling.php'>Промисы: обработка ошибок</a>
        <a class='bigbtn' href='promise_api.php'>Promise API</a>
        <a class='bigbtn' href='promisify.php'>Промисификация</a>
        <a class='bigbtn' href='microtask_queue.php'>Микрозадачи</a>
        <a class='bigbtn' href='async_await.php'>Async/await</a>
        <a class='bigbtn' href='generators.php'>Генераторы</a>
        <a class='bigbtn' href='async_iterators_generators.php'>Асинхронные итераторы и генераторы</a>
        <a class='bigbtn' href='modules_intro.php'>Модули. Введение</a>
        <a class='bigbtn' href='import_export.php'>Экспорт и импорт</a>
        <a class='bigbtn' href='modules_dynamic_imports.php'>Динамические импорты</a>
        <a class='bigbtn' href='proxy.php'>Proxy и Reflect</a>
        <a class='bigbtn' href='eval.php'>Eval: выполнение строки кода</a>
        <a class='bigbtn' href='currying_partials.php'>Каррирование</a>
        <a class='bigbtn' href='bitwise_operators.php'>Побитовые операторы</a>
        <a class='bigbtn' href='bigint.php'>BigInt</a>
        <a class='bigbtn' href='intl.php'>Intl: интернационализация в JavaScript</a>

        <h3>Часть 2. Браузер: документ, события, интерфейсы</h3>
        <p>Изучаем работу со страницей – как получать элементы, манипулировать их размерами, динамически создавать интерфейсы и взаимодействовать с посетителем.</p>

        <a class='bigbtn' href='browser_environment.php'>Браузерное окружение, спецификации</a>
        <a class='bigbtn' href='dom_nodes.php'>DOM-дерево</a>
        <a class='bigbtn' href='dom_navigation.php'>Навигация по DOM-элементам</a>
        <a class='bigbtn' href='searching_elements_dom.php'>Поиск: getElement*, querySelector*</a>
        <a class='bigbtn' href='basic_dom_node_properties.php'>Свойства узлов: тип, тег и содержимое</a>
        <a class='bigbtn' href='dom_attributes_and_properties.php'>Атрибуты и свойства</a>
        <a class='bigbtn' href='modifying_document.php'>Изменение документа</a>
        <a class='bigbtn' href='styles_and_classes.php'>Стили и классы</a>
        <a class='bigbtn' href='size_and_scroll.php'>Размеры и прокрутка элементов</a>
        <a class='bigbtn' href='size_and_scroll_window.php'>Размеры и прокрутка окна</a>
        <a class='bigbtn' href='coordinates.php'>Координаты</a>
        <a class='bigbtn' href='introduction_browser_events.php'>Введение в браузерные события</a>
        <a class='bigbtn' href='bubbling_and_capturing.php'>Всплытие и погружение</a>
        <a class='bigbtn' href='event_delegation.php'>Делегирование событий</a>
        <a class='bigbtn' href='default_browser_action.php'>Действия браузера по умолчанию</a>
        <a class='bigbtn' href='dispatch_events.php'>Генерация пользовательских событий</a>
        <a class='bigbtn' href='mouse_events_basics.php'>Основы событий мыши</a>
        <a class='bigbtn' href='mousemove-mouseover-mouseout-mouseenter-mouseleave.php'>Движение мыши: mouseover/out, mouseenter/leave</a>
        <a class='bigbtn' href='mouse_drag_and_drop.php'>Drag'n'Drop с событиями мыши</a>
        <a class='bigbtn' href='keyboard_events.php'>Клавиатура: keydown и keyup</a>
        <a class='bigbtn' href='pointer_events.php'>События указателя</a>
        <a class='bigbtn' href='onscroll.php'>Прокрутка</a>
        <a class='bigbtn' href='form_elements.php'>Свойства и методы формы</a>
        <a class='bigbtn' href='focus_blur.php'>Фокусировка: focus/blur</a>
        <a class='bigbtn' href='events_change_input.php'>События: change, input, cut, copy, paste</a>
        <a class='bigbtn' href='forms_submit.php'>Отправка формы: событие и метод submit</a>
        <a class='bigbtn' href='onload_ondomcontentloaded.php'>Страница: DOMContentLoaded, load, beforeunload, unload</a>
        <a class='bigbtn' href='script_async_defer.php'>Скрипты: async, defer</a>
        <a class='bigbtn' href='onload_onerror.php'>Загрузка ресурсов: onload и onerror</a>
        <a class='bigbtn' href='mutation_observer.php'>MutationObserver: наблюдатель за изменениями</a>
        <a class='bigbtn' href='selection_range.php'>Selection и Range</a>
        <a class='bigbtn' href='event_loop.php'>Событийный цикл: микрозадачи и макрозадачи</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='intro.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>