using NetCuratio_CommonLayer.Objects;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_DataAccessLayer.IRepositories
{
    public interface IEmailRepository
    {
        void SendEmail(EmailModel email);
        void SendEmailToMailingList(JustEmailModel email);
    }
}
