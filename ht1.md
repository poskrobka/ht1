Анализ проекта на соответствие парадигмам программирования и архитектуре кода

Анализ

1. В проекте использована объектно-ориентированая парадигма
2. Динамическая типизация
3. Использованы принципы ООП (инкапсуляция, наследование)
4. Использованы модификаторы доступа к методам классов
5. SOLID
    5.1 Принцип единой ответсвенности не соблюдается (напиример классы controllers/SlaController 
    и controllers/SiteController выполнены как God Objects, также существуют методы с большим количеством аргументов 
    например controllers/SiteController метод availableUsers)
    5.2 Принцип открытости/закрытости не возможно проанализировать т.к. структура наследования везде только двухуровневая
    5.3 Принцип Барбары Лисков нарушен. В проектировании не использовались интерфейсы
    5.4 Принцип разделения интерфейсов не использован по указаной выше причине
    5.5 Принцип инверсии зависимостей не соблюден . При проектировании не предполагалось использовать абстракции
6. Не соблюден принцип Dry. 
7. Не соблюден принцип Soc
8. В процессе работы над проектом не соблюдался принцип Rule of three 
  