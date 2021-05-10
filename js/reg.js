$(document).ready( () => {
    const regExEmail = /.+@.+\..+/i
    const email = $('input[name=email]')
    const password = $('input[name=password]')
    const password2 = $('input[name=password2]')

    email.blur( () => {
        if (email.val() !== '')
            if (email.val().search(regExEmail) === 0){
                $('#valid_email_message').text('')
                $('button[type=submit]').removeAttr('disabled')
            } else {
                $('#valid_email_message').text('Неправильный E-mail')
                $('button[type=submit]').attr('disabled', 'disabled')
            }
        else {
            $('#valid_email_message').text('Введите ваш E-mail')
            $('button[type=submit]').attr('disabled', 'disabled')
        }
    })

    password.blur( () => {
        if (password.val() !== '')
            if (password.val().length >= 6) {
                $('#valid_password_message').text('')
                $('button[type=submit]').removeAttr('disabled')
            } else {
                $('#valid_password_message').text('Минимальная длина пароля 6 символов')
                $('button[type=submit]').attr('disabled', 'disabled')
            }
        else {
            $('#valid_password_message').text('Введите пароль')
            $('button[type=submit]').attr('disabled', 'disabled')
        }
    })

    password2.blur( () => {
        if (password2.val() !== '')
            if (password2.val() === password.val()) {
                $('#valid_password2_message').text('')
                $('button[type=submit]').removeAttr('disabled')
            } else {
                $('#valid_password2_message').text('Пароли не совпадают')
                $('button[type=submit]').attr('disabled', 'disabled')
            }
        else {
            $('#valid_password2_message').text('Повторите пароль')
            $('button[type=submit]').attr('disabled', 'disabled')
        }
    })
})