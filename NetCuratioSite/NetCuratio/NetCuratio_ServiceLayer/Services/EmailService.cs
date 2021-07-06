using NetCuratio_ServiceLayer.IServices;
using NetCuratio_CommonLayer.Objects; 
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using NetCuratio_DataAccessLayer.IRepositories;
using NetCuratio_DataAccessLayer.Repositories;

namespace NetCuratio_ServiceLayer.Services
{
    public class EmailService : IEmailService
    {
        void IEmailService.SendEmail(EmailModel email)
        {
            IEmailRepository emailRepo = new EmailRepository();
            emailRepo.SendEmail(email);
        }
        //This does not work
        void IEmailService.SendEmailToMailingList(JustEmailModel email)
        {
            IEmailRepository emailRepo = new EmailRepository();
            emailRepo.SendEmailToMailingList(email);
        }

    }
}
