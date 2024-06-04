import { FormEventHandler } from "react";

type Props = {
  className? : string;
  children: string;
}

const Button = (props : Props) => {
  return (
    <button className={`border-2 px-3 py-1 rounded-md hover:opacity-80 ${props.className}`}>{props.children}</button>
  )
}

export default Button
