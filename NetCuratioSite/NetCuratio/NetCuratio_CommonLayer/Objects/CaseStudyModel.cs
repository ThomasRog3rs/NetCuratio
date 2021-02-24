using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_CommonLayer.Objects
{
    public class CaseStudyModel
    {
        public static List<CaseStudy> CaseStudies = new List<CaseStudy>() {
            new CaseStudy
            {
                Name = "KR Wellness",
                Id = "KRWellness",
                Url = "http://krwellness.trwebdev.com",
                Intro = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas.",
                Objective = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. ",
                Problems = new List<List<string>>(){ new List<string>() { "Branding", "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. " }, new List<string>() {"Customer Engagement", "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. " } },
                WhatWeDid = "Some quick example text to build on the card title and make up the bulk of the card's content.",
                Features = new List<string>(){"Mobile design", "Branding", "Social media post templates", "Customer contact", "Instagram intergration" },
                HomeText = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. "

            },
            new CaseStudy
            {
                Name = "Naxian Castle",
                Id = "NaxianCastle",
                Url = "http://george.trwebdev.com",
                Intro = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas.",
                Objective = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. ",
                Problems = new List<List<string>>(){ new List<string>() { "Branding", "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. " }, new List<string>() {"Customer Engagement", "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. " } },
                WhatWeDid = "Some quick example text to build on the card title and make up the bulk of the card's content.",
                Features = new List<string>(){"Mobile design", "Branding", "Customer contact", "Booking System" },
                HomeText = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. "

            },
            new CaseStudy
            {
                Name = "Talk'N'Heal",
                Id = "TalkNHeal",
                Url = "http://stage4.trwebdev.com",
                Intro = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas.",
                Objective = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. ",
                Problems = new List<List<string>>(){ new List<string>() { "Branding", "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. " }, new List<string>() {"Customer Engagement", "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. " } },
                WhatWeDid = "Some quick example text to build on the card title and make up the bulk of the card's content.",
                Features = new List<string>(){"Mobile design", "Branding", "Customer contact", "Booking System" },
                HomeText = "Pickled palo santo 8-bit authentic raw denim, flexitarian deep v before they sold out banh mi tbh migas. Locavore sartorial cardigan, messenger bag gochujang wayfarers listicle palo santo. "

            }
        };
        public static CaseStudy GetCaseStudy(string studyId)
        {
            studyId = studyId.ToLower();
            foreach(var study in CaseStudies)
            {
                if(studyId == study.Id.ToLower())
                {
                    return study;
                }
            }
            return null;
        }
        public static List<CaseStudy> GetAllCaseStudies()
        {
            return CaseStudies;
        }
    }

    public class CaseStudy
    {
        public string Name { get; set; }
        public string Id { get; set; }
        public string Url { get; set; }
        public string Intro { get; set; }
        public string Objective { get; set; }
        public List<List<string>> Problems { get; set; }
        public string WhatWeDid { get; set; }
        public List<string> Features { get; set; }
        public string HomeText { get; set; }
    }
}
