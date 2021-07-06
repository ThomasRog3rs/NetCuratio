using NetCuratio.Helpers;
using NetCuratio.Models;
using NetCuratio_CommonLayer.Objects;
using NetCuratio_ServiceLayer.IServices;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Net.Mail;
using System.Web;
using System.Web.Mvc;

namespace NetCuratio.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;
            ViewBag.ShowSuccessMessage = false;
            ViewBag.Plans = PlansModel.GetAllPlans();
            ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

            var model = new EmailSignUpModel();
            return View(model);
        }

        [Route("About")]
        public ActionResult About()
        {
            var model = new CaseStudyViewModel
            {
                AllCaseStudies = CaseStudyModel.GetAllCaseStudies()
            };

            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;
            ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

            return View(model);
        }

        [Route("Plans")]
        public ActionResult Services()
        {
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;
            ViewBag.ShowSuccessMessage = false;
            ViewBag.Plans = PlansModel.GetAllPlans();
            ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

            return View();
        }

        [Route("Contact")]
        [HttpGet]
        public ActionResult Contact()
        {
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;
            ViewBag.ShowSuccessMessage = false;
            ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

            var model = new ContactViewModel();

            return View(model);
        }

        [Route("Contact")]
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Contact(ContactViewModel model)
        {
            if (ModelState.IsValid)
            {
                IEmailService emailService = new NetCuratio_ServiceLayer.Services.EmailService();

                var email = new EmailTransform().TranformContactMessage(model);

                emailService.SendEmail(email);

                ViewBag.ShowSuccessMessage = true;
                ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

                return View("Contact", model); 
            }
            else
            {
                ViewBag.ShowSuccessMessage = false;
                ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

                return View("Contact", model);
            }
        }

        [Route("Plans/{packageCode}")]
        [HttpGet]
        public ActionResult RegisterInterest(string packageCode)
        {
            var model = new RegisterInterestViewModel
            {
                SelectedPackage = packageCode
            };

            model.PackageDetails = PlansModel.GetPlan(model.SelectedPackage);
            if(model.PackageDetails == null)
            {
                return RedirectToAction("Services", "Home");
            }

            ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

            return View(model);
        }

        [Route("Plans/{packageCode}")]
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult RegisterInterest(RegisterInterestViewModel model)
        {
            model.PackageDetails = PlansModel.GetPlan(model.SelectedPackage);
            if (ModelState.IsValid)
            {
                IEmailService emailService = new NetCuratio_ServiceLayer.Services.EmailService();

                var email = new EmailTransform().TransformRegisterInterest(model);

                emailService.SendEmail(email);

                return RedirectToAction("Thanks",  "Home");
            }

            else
            {
                ViewBag.Section = "form";
                ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

                return View("RegisterInterest", model);
            }
        }

        [Route("CaseStudy/{studyId}")]
        public ActionResult CaseStudy(string studyId)
        {
            var model = new CaseStudyViewModel
            {
                ProjectDetails = CaseStudyModel.GetCaseStudy(studyId),
                AllCaseStudies = CaseStudyModel.GetAllCaseStudies()
            };

            if (model.ProjectDetails == null)
            {
                return RedirectToAction("Lost");
            }

            var root = ConfigurationManager.AppSettings["SiteRoot"];
            ViewBag.Root = root;
            ViewBag.HomepageImage = string.Format("{0}/Content/img/case-studies/{1}/{1}_homepage.jpg", root, model.ProjectDetails.Id);
            ViewBag.MobileImage = string.Format("{0}/Content/img/case-studies/{1}/{1}_homepage_mobile.jpg", root, model.ProjectDetails.Id);

            return View("CaseStudy", model);
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult EmailSignUp(EmailSignUpModel model)
        {
            ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];
            ViewBag.Section = "register";
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;
            ViewBag.Plans = PlansModel.GetAllPlans();

            if (ModelState.IsValid)
            {
                IEmailService emailService = new NetCuratio_ServiceLayer.Services.EmailService();

                var email = new EmailTransform().TransformEmailSignUp(model);

                ViewBag.ShowSuccessMessage = true;

                emailService.SendEmail(email);

                var userEmail = new JustEmailModel() {
                    email = model.Email
                };

                //Does not work
                //emailService.SendEmailToMailingList(userEmail);

                return View("Index");
            }
            else
            {
                ViewBag.ShowSuccessMessage = false;
                return View("Index");
            }
        }

        //[Route("Plans/Thanks")]
        public ActionResult Thanks()
        {
            ViewBag.Root = ConfigurationManager.AppSettings["SiteRoot"];

            return View();
        }

        //[Route("Blog")]
        //public ActionResult Blog()
        //{
        //    ViewBag.CatchPhrase = "Beautiful websites, expertly made.";

        //    return View();
        //}

    }
}