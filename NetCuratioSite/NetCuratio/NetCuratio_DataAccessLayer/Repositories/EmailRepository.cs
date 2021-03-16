using NetCuratio_CommonLayer.Objects;
using NetCuratio_DataAccessLayer.IRepositories;
using NLog;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Net;
using System.Net.Mail;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_DataAccessLayer.Repositories
{
    public class EmailRepository : IEmailRepository
    {
        private static readonly Logger Logger = LogManager.GetCurrentClassLogger();

        public void SendEmail(EmailModel email)
        {
            int port = 0;

            if (!Int32.TryParse(ConfigurationManager.AppSettings["SmtpPort"], out port))
            {
                Logger.Error("The port number, in web.config, isn't an integer... you fool!");
            }

            MailMessage message = new MailMessage();
            message.From = new MailAddress("info@netcuratio.com");
            message.Subject = email.Subject;
            message.IsBodyHtml = true;
            message.Body = email.Body;

            foreach (var to in email.To)
            {
                message.To.Add(to);
            }

            SmtpClient smtp = new SmtpClient("auth.smtp.1and1.fr", port);
            smtp.Credentials = new NetworkCredential("info@netcuratio.com", "H@z5!mssiHyL!Pi");
            smtp.EnableSsl = true;
            try
            {
                // smtp.Send(Msg);
                smtp.Send(message);
            }
            catch (Exception ex)
            {
                Logger.Error(string.Format("Message: {0} | Inner exception: {1} |", ex.Message, ex.InnerException), "Email error.");
            }
        }
    }
}
