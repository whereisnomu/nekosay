<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once './libs/PHPMailer/src/Exception.php';
require_once './libs/PHPMailer/src/PHPMailer.php';
require_once './libs/PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';


$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;



$mail->Host = 'ssl://smtp.mail.ru';
$mail->Port = 465;
$mail->Username = 'tf-no-reply-bot@mail.ru';
$mail->Password = 'nueb5siFgRjraCdHgiih';


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$e_bpla = $_POST['e_bpla'];
$e_business = $_POST['e_business'];
$network = $_POST['network'];



$mail->setFrom('tf-no-reply-bot@mail.ru', 'tf-no-reply-bot');

$mail->addAddress('manager@copterlab.ru', 'Менеджер');
$mail->AddCC('arturchagirov@gmail.com', 'Arthur Chagirov');
// $mail->AddCC('rezultat_logoped@mail.ru', 'Logoped Rezultat');


$subject = "Пройденный опрос! №". rand(100000, 999999); 

$mail->Subject = $subject;




$message = '<table
width="100%"
border="0"
cellspacing="0"
cellpadding="0"
style="
  border-collapse: collapse;
  border-spacing: 0;
  min-width: 500px;
  max-width: 600px;
  border-radius: 12px;
  background-color: #ffffff;
"
bgcolor="#ffffff"
>
<tbody>
  <tr>
    <td
      align="center"
      bgcolor="#ffffff"
      style="
        border-radius: 12px 12px 0 0;
        background-color: #ffffff;
        font-size: 0;
        margin: 0;
        padding: 24px 20px 36px;
      "
    >
    </td>
  </tr>
  <tr>
    <td style="font-size: 0; margin: 0; padding: 0 20px">
      <table
        cellspacing="0"
        cellpadding="0"
        bgcolor="#ffffff"
        align="left"
        width="100%"
        style="border-collapse: collapse; border-spacing: 0"
      >
        <tbody>
          <tr>
            <td
              valign="top"
              align="center"
              style="font-size: 0; margin: 0; padding: 0"
            >
              <table
                width="100%"
                cellspacing="0"
                cellpadding="0"
                style="border-collapse: collapse; border-spacing: 0"
              >
                <tbody>
                  <tr>
                    <td
                      align="center"
                      style="font-size: 0; margin: 0; padding: 0 0 24px"
                    >
                      <div
                        class="a6S"
                        dir="ltr"
                        style="opacity: 0.01; left: 735.612px; top: 255.5px"
                      >
                        <div
                          id=":i1"
                          class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q"
                          role="button"
                          tabindex="0"
                          aria-label="Download attachment "
                          jslog="91252; u014N:cOuCgd,Kr2w4b,xr6bB; 4:WyIjbXNnLWY6MTc4NTYyMDEzMzc4MTA0NzAzNCJd"
                          data-tooltip-class="a1V"
                          jsaction="JIbuQc:.CLIENT"
                          data-tooltip="Download"
                        >
                          <div class="akn">
                            <div class="aSK J-J5-Ji aYr"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td
                      align="left"
                      style="font-size: 0; margin: 0; padding: 0 0 18px"
                    >
                      <p
                        style="
                          font-size: 18px;
                          font-style: normal;
                          font-weight: 400;
                          letter-spacing: -0.01em;
                          line-height: 28px;
                          color: #707a8a;
                          margin: 0;
                          padding: 0;
                        "
                      ></p>
                    </td>
                  </tr>

                  <tr>
                    <td
                      align="left"
                      style="font-size: 0; margin: 0; padding: 0"
                    >
                      <h1
                        style="
                          font-size: 44px;
                          font-style: normal;
                          font-weight: 500;
                          letter-spacing: -0.04em;
                          line-height: 48px;
                          color: #2b2f33;
                          margin: 0;
                          padding: 0;
                        "
                      >
                      Пройденный опрос!
                      </h1>
                    </td>
                  </tr>

                  <tr>
                    <td
                      align="left"
                      style="font-size: 0; margin: 0; padding: 24px 0 0"
                    >
                      <p
                        style="
                          font-size: 18px;
                          font-style: normal;
                          font-weight: 400;
                          letter-spacing: -0.01em;
                          line-height: 28px;
                          color: #2b2f33;
                          margin: 0;
                          padding: 0;
                        "
                      >
                        На лендинге <a href="fr-copterlab.ru">fr-copterlab.ru</a> клиент прошел тест-опрос!
                        <br />
                        Контакты и ответы на вопросы заинтересованного лица: &nbsp; <br />
                      </p>
                    </td>
                  </tr>

                  <tr>
                    <td
                      align="left"
                      style="font-size: 0; margin: 0; padding: 24px 0 0"
                    >
                      <p
                        style="
                          font-size: 18px;
                          font-style: normal;
                          font-weight: 400;
                          letter-spacing: -0.01em;
                          line-height: 28px;
                          color: #2b2f33;
                          margin: 0;
                          padding: 0;
                        "
                      >
                        Интересует:
                        <a
                          href="https://topfranchise.ru/products/franshiza-tsentra-fop-kopterlab-po-podgotovke-operatorov-bpla/"
                          >Франшиза  «КоптерЛаб» — это авторская программа обучения управлению БПЛА, созданная лучшими пилотами и инженерами страны.
                        </a>
                      </p>

                      <p
                        style="
                          font-size: 18px;
                          font-style: normal;
                          font-weight: 400;
                          letter-spacing: -0.01em;
                          line-height: 28px;
                          color: #2b2f33;
                          margin: 0;
                          padding: 0;
                        "
                      >
                        Имя: '. $name .'
                      </p>

                      <p
                        style="
                          font-size: 18px;
                          font-style: normal;
                          font-weight: 400;
                          letter-spacing: -0.01em;
                          line-height: 28px;
                          color: #2b2f33;
                          margin: 0;
                          padding: 0;
                        "
                      >
                        Телефон: <a href="tel:'.str_replace(' ', '', $phone).'"> '. $phone .' </a>
                      </p>

                      <p
                        style="
                          font-size: 18px;
                          font-style: normal;
                          font-weight: 400;
                          letter-spacing: -0.01em;
                          line-height: 28px;
                          color: #2b2f33;
                          margin: 0;
                          padding: 0;
                        "
                      >
                        Почта:
                        <a href="mailto:'. $email .'"
                           >'. $email .'
                        </a>
                      </p>


                      <p
                      style="
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        letter-spacing: -0.01em;
                        line-height: 28px;
                        color: #2b2f33;
                        margin: 0;
                        padding: 0;
                      "
                    >
                      Город: '. $city .'

                    </p>

                    <p
                    style="
                      font-size: 18px;
                      font-style: normal;
                      font-weight: 400;
                      letter-spacing: -0.01em;
                      line-height: 28px;
                      color: #2b2f33;
                      margin: 0;
                      padding: 0;
                    "
                  >
                     Есть ли опыт управления БПЛА?
                     <br>
                     Ответ: '. $e_bpla .'

                  </p>

                  <p
                  style="
                    font-size: 18px;
                    font-style: normal;
                    font-weight: 400;
                    letter-spacing: -0.01em;
                    line-height: 28px;
                    color: #2b2f33;
                    margin: 0;
                    padding: 0;
                  "
                >
                  У вас был опыт собственного бизнеса?
                  <br>
                   Ответ: '. $e_business .'

                </p>

                <p
                style="
                  font-size: 18px;
                  font-style: normal;
                  font-weight: 400;
                  letter-spacing: -0.01em;
                  line-height: 28px;
                  color: #2b2f33;
                  margin: 0;
                  padding: 0;
                "
              >
               Есть ли знакомые инструкторы БПЛА?
               <br>
               Ответ: '. $network .'

              </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>


          <tr>
            <td
              valign="top"
              align="center"
              style="font-size: 0; margin: 0; padding: 0"
            >
              <table
                width="100%"
                cellspacing="0"
                cellpadding="0"
                style="border-collapse: collapse; border-spacing: 0"
              >
                <tbody>
                  <tr>
                    <td
                      align="center"
                      style="font-size: 0; margin: 0; padding: 48px 0"
                    >
                      <table
                        border="0"
                        width="100%"
                        height="100%"
                        cellpadding="0"
                        cellspacing="0"
                        style="border-collapse: collapse; border-spacing: 0"
                      >
                        <tbody>
                          <tr>
                            <td
                              style="
                                width: 100%;
                                height: 1px;
                                border-bottom-width: 1px;
                                border-bottom-color: #dfe3e8;
                                border-bottom-style: solid;
                                font-size: 0;
                                margin: 0;
                                padding: 0;
                              "
                            ></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
  <tr>
    <td
      align="left"
      bgcolor="#ffffff"
      style="
        background-color: #ffffff;
        font-size: 0;
        margin: 0;
        padding: 72px 20px 48px;
      "
    >
      <table
        cellpadding="0"
        cellspacing="0"
        width="100%"
        style="border-collapse: collapse; border-spacing: 0"
      >
        <tbody>
          <tr>
            <td align="center" style="font-size: 0; margin: 0; padding: 0">
              <table
                align="center"
                cellpadding="0"
                cellspacing="0"
                width="100%"
                style="border-collapse: collapse; border-spacing: 0"
              ></table>
            </td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
</tbody>
</table>
';



$mail->msgHTML($message);

$mail->send();

header("Location: ../success.html")
?>