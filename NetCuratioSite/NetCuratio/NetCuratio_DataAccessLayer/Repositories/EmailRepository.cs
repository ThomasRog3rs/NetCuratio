using NetCuratio_CommonLayer.Objects;
using NetCuratio_DataAccessLayer.IRepositories;
using Newtonsoft.Json;
using NLog;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Net.Http.Headers;
using System.Net.Mail;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_DataAccessLayer.Repositories
{
    public class EmailRepository : IEmailRepository
    {
        private static readonly Logger Logger = LogManager.GetCurrentClassLogger();
        private static string Base64Encode(string textToEncode)
        {
            byte[] textAsBytes = Encoding.UTF8.GetBytes(textToEncode);
            return Convert.ToBase64String(textAsBytes);
        }
        public void SendEmail(EmailModel email)
        {
            int port = 0;

            if (!Int32.TryParse(ConfigurationManager.AppSettings["SmtpPort"], out port))
            {
                Logger.Error("The port number, in web.config, isn't an integer... you fool!");
            }

            MailMessage message = new MailMessage();
            message.From = new MailAddress("info@netcuratio.com", "Net Curatio");
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
                Logger.Error(string.Format("Message: {0} | Inner exception: {1} | Email message: {2}", ex.Message, ex.InnerException, email.Body), "Email error.");
            }
        }

        //This method does not work
        public void SendEmailToMailingList(JustEmailModel email)
        {
            string path = "http://api.trwebdev.com/api/create.php";

            //send the user email to the mailing list API
            using (HttpClient client = new HttpClient())
            {
                client.BaseAddress = new Uri(path);
                client.DefaultRequestHeaders.Accept.Clear();
                client.DefaultRequestHeaders.Add("Content-Type", "application/json");
                var byteArray = Encoding.ASCII.GetBytes("netcuratio_admin:D*P0mwHRJj?3");
                client.DefaultRequestHeaders.Authorization = new System.Net.Http.Headers.AuthenticationHeaderValue("Basic", Convert.ToBase64String(byteArray));

                string content = JsonConvert.SerializeObject(email);
                client.PostAsync(path, new System.Net.Http.StringContent(content, Encoding.UTF8, "application/json"));
            }
        }


    }
}
