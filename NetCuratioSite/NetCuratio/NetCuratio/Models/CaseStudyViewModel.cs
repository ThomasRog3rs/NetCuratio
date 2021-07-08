﻿using NetCuratio_CommonLayer.Objects;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace NetCuratio.Models
{
    public class CaseStudyViewModel
    {
        public CaseStudy ProjectDetails { get; set; }
        public List<CaseStudy> AllCaseStudies { get; set; }
    }

    public class DocViewModel
    {
        public Doc DocContents { get; set; }
        public List<Doc> AllDocs { get; set; }
    }
}