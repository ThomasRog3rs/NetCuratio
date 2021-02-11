using NetCuratio_CommonLayer.Objects;
using NetCuratio_DataAccessLayer.IRepositories;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Mail;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_DataAccessLayer.Repositories
{
    public class EmailRepository : IEmailRepository
    {
        public void SendEmail(EmailModel email)
        {
            SmtpClient client = new SmtpClient()
            {
                Host = "smtp.gmail.com",
                Port = 587,
                EnableSsl = true,
                DeliveryMethod = SmtpDeliveryMethod.Network,
                UseDefaultCredentials = true,
                Credentials = new NetworkCredential()
                {
                    UserName = "NetCuratio@gmail.com",
                    Password = "qjsttpnvvgmfzvzn"
                },
            };

            MailAddress fromEmail = new MailAddress("NetCuratio@gmail.com", "Net Curatio");

            List<MailAddress> toEmails = new List<MailAddress>();
            MailMessage messages = new MailMessage()
            {
                From = fromEmail,
                Subject = email.Subject,
                Body = email.Body
            };

            foreach (var to in email.To)
            {
                messages.To.Add(new MailAddress(to, to));
            }

            messages.IsBodyHtml = true;

            try
            {
                client.Send(messages);
            }
            catch(Exception ex)
            {
                //Log
            }

        }
    }
}
