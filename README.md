## Сущности

### Товары

- Поля: id, name, price, parent_id

### Категории товаров

- Поля: id, name

## Методы

- GET `/categories` - получение категорий
- POST `/categories` - создание категории
- POST `/categories/{id}` - редактирование категории

- GET `/products` - получение списка товаров
- POST `/products` - создание товара
- POST `/products/{id}` - редактирование товара
- DELETE `/products/{id}` - удаление товара

- GET `/categories?includeProducts=1` - получение списка категорий c вложенными товарами
- GET `/categories/{id}?includeProducts=1` - получение одной категории c вложенными товарами
- GET `/categories/{id}/products` - получение списка товаров из категории
