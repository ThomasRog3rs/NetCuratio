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

        public string SaveEmailToEmailList(JustEmailModel email)
        {
            string result = "";
            Uri uri = new Uri("http://api.trwebdev.com/api/create.php");

            //Credentials
            var credentialCache = new CredentialCache();
            credentialCache.Add(
              new Uri(uri.GetLeftPart(UriPartial.Authority)), // request url's host
              "Basic",  // authentication type. hopefully they don't change it.
              new NetworkCredential("netcuratio_admin", "D*P0mwHRJj?3") // credentials 
            );

            //Make Post
            try
            {
                using (var client = new WebClient())
                {
                    client.UseDefaultCredentials = true;
                    client.Credentials = credentialCache;

                    client.Headers[HttpRequestHeader.ContentType] = "application/json";
                    string content = JsonConvert.SerializeObject(email);
                    result = client.UploadString(uri, "POST", content);
                }

            }
            catch (Exception e)
            {
                result = e.Message;
            }

            return result;
        }

    }
}
