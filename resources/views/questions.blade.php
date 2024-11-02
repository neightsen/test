<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h3>Заголовок:  {{ $qestion -> title }}</a></h3>
        <p>Вопрос:  {{ $qestion -> text }}</p>
        <p>Время добавления:  {{ $qestion -> created_at }}</p>
        <p>Ответ:  {{ $qestion -> answer }}</p>



        <form action="{{ route('store', $qestion) }}" method='POST'>
            @csrf
            <input type='text' name='answerText' placeholder='Ответ' required>
            <input type='submit' value='Отправить'>
        </form>

        <a href='/'>обратно</a>
</body>
</html>