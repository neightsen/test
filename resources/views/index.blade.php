<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вопросы</title>
</head>
<body>
    <form action='/' method='POST'>
        @csrf
        <input type='text' name='title' placeholder='Заголовок' required>
        <input type='text' name='text' placeholder='Вопрос' required>
        <input type='text' name='answer' placeholder='Ответ' required>
        <input type='submit' value='Отправить'>
    </form>

    @foreach ($qestions as $qestion)
        <h3>Заголовок:  <a href="{{ route('transition', $qestion) }}">{{ $qestion -> title }}</a></h3>
        <p>Вопрос:  {{ $qestion -> text }}</p>
        <p>Время добавления:  {{ $qestion -> created_at }}</p>
    @endforeach
</body>
</html>