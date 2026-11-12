<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новая заявка</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 10px; border: 1px solid #e0e0e0;">
        <h2 style="color: #3B7EFF; margin-top: 0;">Новая заявка с сайта!</h2>
        <p>Марат, вам пришла новая заявка с формы обратной связи:</p>
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold; width: 30%;">Имя:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Телефон:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">
                    <a href="tel:{{ $data['phone'] }}" style="color: #3B7EFF; text-decoration: none;">{{ $data['phone'] }}</a>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Email:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['email'] ?? 'Не указан' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Тема:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['subject'] ?? 'Не указана' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold; vertical-align: top;">Сообщение:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['message'] }}</td>
            </tr>
        </table>

        <p style="margin-top: 30px; color: #888; font-size: 12px;">Это письмо отправлено автоматически с сайта Realty_M.</p>
    </div>
</body>
</html>