<?xml version='1.0' encoding="iso-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <!-- Miscellaneous parameters -->
  <xsl:param name="doc.section.depth">1</xsl:param>
  <xsl:param name="toc.section.depth">1</xsl:param>
  <xsl:param name="preface.tocdepth">2</xsl:param>
  <xsl:param name="xref.hypermarkup" select="1"/>
  <xsl:param name="xref.with.number.and.title" select="1"/>
  <xsl:param name="page.margin.inner">2cm</xsl:param>
  <xsl:param name="page.margin.outer">2cm</xsl:param>
  <xsl:param name="page.margin.top">2cm</xsl:param>
  <xsl:param name="page.margin.bottom">2cm</xsl:param>

  <!-- Omit output for paragraphs whose role is "summary". -->
  <xsl:template match="simpara[@role='summary']">
  </xsl:template>

  <!-- Abstract with no title -->
  <xsl:template match="abstract">
    <xsl:apply-templates select="*[not(self::title)]"/>
  </xsl:template>

  <!-- Override overall output sequence. -->
  <xsl:template match="book|article">

    <xsl:variable name="info" select="bookinfo|articleinfo|artheader|info"/>
    <xsl:variable name="lang">
      <xsl:call-template name="l10n.language">
        <xsl:with-param name="target" select="(/set|/book|/article)[1]"/>
        <xsl:with-param name="xref-context" select="true()"/>
      </xsl:call-template>
    </xsl:variable>

    <!-- Latex preamble -->
    <xsl:apply-templates select="." mode="preamble">
      <xsl:with-param name="lang" select="$lang"/>
    </xsl:apply-templates>

    <!-- Override link color -->
    <xsl:text>
      \usepackage{hyperref}
      \hypersetup{
        colorlinks=true,
        linkcolor=blue,
        filecolor=blue,
        urlcolor=blue,
        }
    </xsl:text>

    <xsl:value-of select="$latex.begindocument"/>
    <xsl:call-template name="lang.document.begin">
      <xsl:with-param name="lang" select="$lang"/>
    </xsl:call-template>
    <xsl:call-template name="label.id"/>

    <!-- Setup that must be performed after the begin of document -->
    <xsl:call-template name="verbatim.setup2"/>
    <xsl:value-of select="$frontmatter"/>

    <!-- Custom title page -->
    <xsl:text>
    \begin{center}
    \Huge
    \textbf{\DBKtitle \\}
    \end{center}
    \vspace*{1cm}
    \normalsize
    </xsl:text>
    <xsl:apply-templates select="(abstract|$info/abstract)[1]"/>
    <xsl:text>
      \vspace*{1cm}
      \begin{center}
      \includegraphics[width=0.7\textwidth]{images/coverimage.png}
      \end{center}
    </xsl:text>

    <!-- Allow pages to have ragged bottoms to avoid weird vertical space,
         and penalize breaking paragraphs across pages to avoid compile
         errors when links are across page breaks -->
    <xsl:text>
      \raggedbottom
      \interlinepenalty=10000
    </xsl:text>

    <!-- Print the TOC/LOTs -->
    <xsl:apply-templates select="." mode="toc_lots"/>

    <!-- Print the preface -->
    <xsl:apply-templates select="preface"/>

    <!-- Body content -->
    <xsl:value-of select="$mainmatter"/>
    <xsl:apply-templates select="*[not(self::abstract or
                                     self::preface or
                                     self::dedication or
                                     self::colophon or
                                     self::appendix)]"/>

    <xsl:apply-templates select="appendix"/>
    <xsl:if test="*//indexterm|*//keyword">
      <xsl:call-template name="printindex"/>
    </xsl:if>

    <xsl:call-template name="lang.document.end">
      <xsl:with-param name="lang" select="$lang"/>
    </xsl:call-template>
    <xsl:value-of select="$latex.enddocument"/>
  </xsl:template>

  <!-- Handle pixel dimensions for images -->
  <xsl:template name="unit.eval">
    <xsl:param name="length"/>
    <xsl:param name="prop" select="''"/>
    <xsl:choose>
      <!-- percentage of something -->
      <xsl:when test="contains($length, '%') and substring-after($length, '%')=''">
        <xsl:value-of select="number(substring-before($length, '%')) div 100"/>
        <xsl:value-of select="$prop"/>
      </xsl:when>
      <!-- pixel unit: Assume page text width is roughly 600 pixels -->
      <xsl:when test="contains($length, 'px') and substring-after($length, 'px')=''">
        <xsl:value-of select="number(substring-before($length, 'px')) div 600"/>
        <xsl:value-of select="$prop"/>
      </xsl:when>

      <!-- no unit provided means pixel -->
      <xsl:when test="$length and (number($length)=$length)">
        <xsl:value-of select="$length div 600"/>
        <xsl:value-of select="$prop"/>
      </xsl:when>

      <!-- hope the unit is handled -->
      <xsl:otherwise>
        <xsl:value-of select="$length"/>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>

</xsl:stylesheet>
