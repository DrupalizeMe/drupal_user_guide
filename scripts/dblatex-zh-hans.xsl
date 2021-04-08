<?xml version='1.0' encoding="iso-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <xsl:param name="latex.encoding">utf8</xsl:param>

  <xsl:template name="encode.before.style">
    <xsl:param name="lang"/>
    <xsl:variable name="use-unicode">1</xsl:variable>

    <!-- CJK packages -->
    <xsl:text>
      \usepackage{ucs}
      \def\hyperparamadd{unicode=true}
      \usepackage{xeCJK}
      \setCJKmainfont{BabelStoneHan}
      \setCJKsansfont{BabelStoneHan}
      \setCJKmonofont{BabelStoneHan}
    </xsl:text>
  </xsl:template>

</xsl:stylesheet>
