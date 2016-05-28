namespace Hyph;

use DateTime;
use Hyph\Exception\PermissionDeniedException;
use InvalidArgumentException;

class Log
{
    private path;

    const EMERGENCY = "EMERGENCY";
    const ALERT     = "ALERT";
    const CRITICAL  = "CRITICAL";
    const ERROR     = "ERROR";
    const WARNING   = "WARNING";
    const NOTICE    = "NOTICE";
    const INFO      = "INFO";
    const DEBUG     = "DEBUG";

    public function __construct(string path)
    {
        let this->path = path;
        this->checkPath();
    }

    public function log(string level, string message, array context = [])
    {
        var line, timestamp, datetime;

        let line = this->interpolate(message, context);
        let timestamp = time();
        let datetime = date(DateTime::ATOM);

        let line = timestamp . "\t" . datetime . "\t" . line;

        this->process(level, line);
    }

    public function emergency(string message, array context = [])
    {
        this->log(self::EMERGENCY, message, context);
    }

    public function alert(string message, array context = [])
    {
        this->log(self::ALERT, message, context);
    }

    public function critical(string message, array context = [])
    {
        this->log(self::CRITICAL, message, context);
    }

    public function error(string message, array context = [])
    {
        this->log(self::ERROR, message, context);
    }

    public function warning(string message, array context = [])
    {
        this->log(self::WARNING, message, context);
    }

    public function notice(string message, array context = [])
    {
        this->log(self::NOTICE, message, context);
    }

    public function info(string message, array context = [])
    {
        this->log(self::INFO, message, context);
    }

    public function debug(string message, array context = [])
    {
        this->log(self::DEBUG, message, context);
    }

    public function setPath(string path)
    {
        let this->path = path;
        this->checkPath();
    }

    public function getPath() -> string
    {
        return this->path;
    }

    private function process (string level, string message)
    {
        var realfile, datetime;
        let datetime = date("YmdH");
        let realfile = this->path . "/" . level . "." . datetime . ".log";

        error_log(message . PHP_EOL, 3, realfile);
    }

    private function checkPath()
    {
        var mkdirResult;
        if (!file_exists(this->path)) {
            let mkdirResult = mkdir(this->path, "0700", true);
            if (mkdirResult === false) {
                throw new PermissionDeniedException("Can't create directory in " . this->path . ", please check again.");
            }
        } else {
            if (!is_dir(this->path)) {
                throw new InvalidArgumentException("A valid path must be passed to store log files.");
            }
        }

        let this->path = rtrim(this->path, "/");
    }

    private function interpolate(string message, array context = []) -> string
    {
        array replacement = [];
        var key, value;

        for key, value in context {
            let replacement["{" . key . "}"] = value;
        }

        return strtr(message, replacement);
    }
}
